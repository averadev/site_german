<?php namespace App\Controllers\Admin;

	/*
	|--------------------------------------------------------------------------
	| Controlador para el administrador de correos
	|--------------------------------------------------------------------------
	|
	*/

use Illuminate\Support\Facades\Response;
use BaseController;
use Redirect;
use View;
use Input;
use Mail;
use Validator;
use Cache;
use Event;
use Auth;
use Request;
use Section;
use Component;
use DB;

/*models*/
use Module;
use Submodule;
use Inbox;

class InboxController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth.admin_user');
		$this->beforeFilter('csrf',array('except'=>array('getIndex','postSetContact','getContactados','getNocontactados')));
	}

	public function getIndex(){
		$modules  = Module::with('submodules')->get();
		$emails = Inbox::getEmails();
		return View::make('admin.inbox')
		->with('modules',$modules)
		->with('emails',$emails)
		->with('activeModule','b')
		->with('status',1)
		->with('activeSubmodule','b1');
	}

	public function getContactados(){
		$modules  = Module::with('submodules')->get();
		$emails = Inbox::getEmailsByStatus(1);
		return View::make('admin.inbox')
		->with('modules',$modules)
		->with('emails',$emails)
		->with('activeModule','b')
		->with('status',2)
		->with('activeSubmodule','b1');
	}

	public function getNocontactados(){
		$modules  = Module::with('submodules')->get();
		$emails = Inbox::getEmailsByStatus(0);
		return View::make('admin.inbox')
		->with('modules',$modules)
		->with('emails',$emails)
		->with('activeModule','b')
		->with('status',3)
		->with('activeSubmodule','b1');
	}	

	public function postSetContact() {
		if(Request::ajax()){
			$data = [
				'idemail' 		=> strip_tags(trim(Input::get('idemail'))),
				'contactname' 	=> strip_tags(trim(Input::get('contactname'))),
				'contactdate' 	=> strip_tags(trim(Input::get('contactdate')))
			];
			$rules = [
				'idemail' 		=> 'required|integer',
				'contactname' 	=> 'required|max:50',
				'contactdate' 	=> 'required|date_format:"d-m-Y"',
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$data->contactdate = date("Y-m-d", strtotime($data->contactdate)); /*Convert Date*/
				$inbox = new Inbox;
				$inbox = $inbox->upContactEmail($data);
				if($inbox){
					return Response::json(array('error' => 0,'msg' =>  'Actualización Correcta'));
				}

			}else{
				if($validator->messages()->has('idemail'))
					$errorField = 'Por favor reinicie el navegador y vuelva a intentar';
				else if($validator->messages()->has('contactname'))
					$errorField = 'Contactado por: '.$validator->messages()->first('contactname');
				else if($validator->messages()->has('contactdate'))
					$errorField = 'Fecha de contacto: '.$validator->messages()->first('contactdate');				
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}
}
