<?php 

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Mail;
//use Storage;
use Carbon\Carbon;

class AuctionController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para el modulo de subastas.
	|--------------------------------------------------------------------------
	|
	*/

	// public function getIndex(){
	// 	return View::make('subasta');
	// }

	/**
	 * Function showSubmodule
	 */
	public function showSubmodule () {
		$submodule = DB::table('module', 'module.id', 'module.name')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->where('module.id', '=', 2)
		->get();
        return View::make('subasta', array('submodule' => $submodule));
    }

    /**
     * Function getSubmodule --> Muestra los submodulos del modulo subasta
     */
    public function getSubmodule () {
    	$submodule = DB::table('module', 'module.id', 'module.name')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->where('module.id', '=', 2)
		->get();
        return View::make('subasta', array('submodule' => $submodule));
    }

    /**
     * Function getSectionSubmodule --> Muestra las secciones del submodulo
     */
    public function getSectionSubmodule ($id) {
    	$section_submodule = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->where('section.idSubmodule', '=', $id)
		->get();
        return View::make('subasta', array('section_submodule' => $section_submodule));
    }

    /**
     * Function getSectionSubPQ --> Muestra las secciones del submodulo Por Que
     */
    public function getSectionSubPQ () {
    	// objeto vacio
    	$submodule_section_data = new stdClass();
		
    	$submodule_section = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->get();

		/**
		 * Date Current
		 */
		Carbon::setLocale('es');
		$now = Carbon::now(new DateTimeZone('America/Mexico_City'));
		$date = $now;
		// $hour toTimeString('H:i:s') = (12:00:00)
		$hour = $now->toTimeString();
		//$date=$now->format('l jS \\of F Y h:i:s');
		
		foreach ($submodule_section as $key => $value) {
			$submodule_section_data->{$value->name} = TextParser::change(nl2br($value->value));
		}
		/*
			Datos Subasta
		*/
			$CurrentAuctionPics = Subasta::getImages();

		/*  */


        return View::make('subasta')->with('submodule_section_data', $submodule_section_data)->with('date', $date)->with('hour', $hour)->with('auctionpics',$CurrentAuctionPics);;
    }

    /**
     * Function SendmailContactUS --> Subseccion Proximamente
     */
    public function SendmailContactUS () {
    	$input = Input::all();

		$rules = array (
				'name'=> 'required',
				'email'=> 'required|email',
				'city'=> 'required',
				'comment'=> 'required'
			);
		
		$messages = array(
            'required'  => 'El campo :attribute es obligatorio.',
            'email'   =>'El campo :attribute no es email valido',
        );

		$validation = Validator::make($input, $rules);

		if ($validation->fails()) {
			$return = '';
			foreach ($validation->errors()->all() as $err) {
				$return .= $err . '<br>';
			}
			return $return;
			return View::make('subasta')->withErrors($validation)->withInput();
		} else {
			$data = array(
					'name'=>Input::get('name'),
					'email'=>Input::get('email'),
					'city'=>Input::get('city'),
					'comment'=>Input::get('comment')
				);

			$send = Mail::send('subastas.email_send', $data, function($message) {
				$message->to(Input::get('email'))
				->from('tu_correo@dominio.com', 'German Arzate | Próximamente')
				->subject(Input::get('comment'));
			});
			return $send;
			
		}
    }

}