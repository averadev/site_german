<?php

class HomeController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/


	public function getIndex(){

		$lastFeeds = [];

		/*Se inicializa el plugin para obtener los posts del blog*/
		setlocale(LC_ALL,'es_ES');
		$blog = 'http://germanarzate.com/blog/en';
		$feed = new SimplePie();
		$feed->set_feed_url("http://germanarzate.com/blog/en/feed");
		$feed->enable_cache(true);
		$feed->set_cache_location(storage_path().'/cache');
		$feed->set_cache_duration(60); /*60 minutes default*/
		$feed->set_output_encoding('utf-8');
		$feed->init();
		$feed->handle_content_type();


		/*Se obtienen los ultimos 3 posts del blog*/
		foreach ($feed->get_items(0,3) as $item)
		{
			$blogFeed = new stdClass();
			$feedDescription = $item->get_content();
			$image = $this->returnImage($feedDescription);
			$image = $this->scrapeImage($image);
			if(!$image){
				$image = $this->getUrlImage($item->get_permalink());
			}
			$blogFeed->title = $item->get_title();
			$blogFeed->image = $image;
			$blogFeed->image_url = $item->get_permalink();
			$blogFeed->description = strip_tags($item->get_content());
			//return var_dump(strip_tags($item->get_content()));
			$blogFeed->postdate = $this->setDate($item->get_date( 'm d, Y' ));
			array_push($lastFeeds, $blogFeed);
		}

		/*Obtener los elementos de las secciones del home*/
		$block = Component::getPageContent(1);
		
		/*Se añaden todo el conenido de las secciones a un objecto*/
		
		$auctionEndDate = [];
		$auction = Obra::getActiveAuctionDetails();
		if($auction){
			$auctionEndDate = $auction->endDate;
			$auctionEndDate = explode("-", $auctionEndDate);
			$auctionEndDate[1] = Helper::getMonthName(intval($auctionEndDate[1]));
		}
		$bids = Obra::getBids();
		foreach ($bids as $key => $value) {
			$value->monthDate = Helper::getMonthName($value->monthDate);
		}
		$totalBids = count($bids);
		$bidsFormat =  strval($totalBids);
		$bidsFormat = str_split($bidsFormat , 1);
		return View::make('home')
		->with('data',$block)
		->with('feeds',$lastFeeds)
		->with('bloglink',$blog)
		->with('bids',$bids)
		->with('auction',$auction)
		->with('totalbids',$totalBids)
		->with('bidsFormat',$bidsFormat)
		->with('auctionEndDate',$auctionEndDate);
	}

	public function postNewsLetter(){
    	if (Request::ajax()) {
	    	$data = [
				'name'		=> strip_tags(Input::get('name')),
				'email'		=> strip_tags(Input::get('email'))
			];

			$rules = [
				'name'=> 'required|max:50',
				'email'=> 'required|email|max:50'
			];

			$validation = Validator::make($data, $rules);

			if ($validation->passes()) {

				$datamail = (object)$data;
				$datamail->email_id = 1; /*newsletter*/
				$inbox = new Inbox;
				$inbox = $inbox->addEmail($datamail);
				if($inbox){
					Mail::send('emails.newsletter', $data, function($message) use ($data) {
						$message->to(Input::get('email'))
						->subject('German Arzate | NEWSLETTER');
					});
					return Response::json(array('success' => true));					
				}

			} else {
				$messages = $validation->messages();

				if($validation->messages()->has('name'))
					$errorField = $validation->messages()->first('name');
				else if($validation->messages()->has('email'))
					$errorField = $validation->messages()->first('email');

				return Response::json(array('success'=> false,'msg' => $errorField));
			}

    	}
	}

	private function returnImage ($text) {
		$text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
		$pattern = "/<img[^>]+\>/i";
		preg_match($pattern, $text, $matches);
		if (isset($matches[0])){
			$text = $matches[0];
		}else{
			$text = '';
		}
		return $text;
	}

    //This function will filter out image url which we got from previous returnImage() function

	private function scrapeImage($text) {
		$pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
		preg_match($pattern, $text, $link);
		if (isset($link[1])){
			$link = $link[1];
		}else{
			$link = '';
		}
		$link = urldecode($link);
		return $link;
	}

	private function getUrlImage($url){
		$image = '';
		$html = file_get_contents($url);
		preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i',$html, $matches ); /*buscar imagen*/
		if( isset($matches[0][4]) ){
			$imagesarr = explode(",", $matches[0][4]);
			if( isset($imagesarr[4]) ){
				$imagesarr = explode(" ", trim($imagesarr[4]));
				if(isset($imagesarr[0])){
					return $imagesarr[0];
				}
			}
		}
		if(isset($matches[1])){
			foreach ($matches[1] as $key => $value) {
				if (strpos($value, 'wp-content') !== false) {
					$image = $value;
				}
			}
		}
		return $image;
	}

	private function setDate($date){
		$month = (int)substr($date, 0, 2);
		$newDate = substr($date, 2);
		$mName = Helper::getMonthName($month);
		return ($mName.$newDate);	
	}

}