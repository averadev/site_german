<?php

class HomeController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/


	public function getIndex(){
		
		$block = new stdClass();
		$monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
		$lastFeeds = [];

		/*Se inicializa el plugin para obtener los posts del blog*/
		setlocale(LC_ALL,'es_ES');
		$blog = 'http://stg.germanarzate.com/blog/';
		$feed = new SimplePie();
		$feed->set_feed_url("http://stg.germanarzate.com/blog/feed/");
		$feed->enable_cache(true);
		$feed->set_cache_location(storage_path().'/cache');
		$feed->set_cache_duration(60*60*12);
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
		$dataHome = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.detail')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('submodule.idModule','=',1)
		->get();
		
		/*Se añaden todo el conenido de las secciones a un objecto*/
		
		foreach ($dataHome as $key => $value) {
			$block->{$value->name} = TextParser::change(nl2br($value->value));
		}

		$auction = Subasta::select('id','name','detail',DB::raw("DATE_FORMAT(iniDate, '%Y-%m-%d %H:%i') as iniDate, DATE_FORMAT(endDate, '%Y-%m-%d %H:%i') as endDate"))
		->where('status',1)->with('images')->first();
		
		$bids = Subasta::getBids();
		foreach ($bids as $key => $value) {
			$value->monthDate = $monthNames[$value->monthDate];
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
		->with('bidsFormat',$bidsFormat);
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
		$monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
		"Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Didciembre"];
		$mName = $monthNames[$month];
		return ($mName.$newDate);	
	}	    


}