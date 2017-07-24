<?php

class UserVerificationController extends BaseController {

	public function verify($code){
		if(!$code)
			{
				return Redirect::to('/');
			}
	
			$user = Auction_user::whereConfirmationCode($code)->first();
	
			if (!$user)
			{
				return Redirect::to('/');
			}

			$user->status = 1;
			$user->confirmation_code = null;
			$user->save();
	
			return View::make('successverification');
	}
}

