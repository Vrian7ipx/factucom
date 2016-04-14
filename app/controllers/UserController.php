<?php 

class UserController extends \BaseController{
	public function login(){		
		return View::make('index.login');		
	}

	public function enter(){
		$user = Input::get('domain').'.'.Input::get('username');
		$password = Input::get('password');
		//return $password;
		if (Auth::attempt(array('username' => $user, 'password' => $password)))
		{
    		return Redirect::intended('inicio');
		}
		return Redirect::intended('ingresar');
		return 0;
	}

	public function logout(){		
		if(Auth::check()){
			Auth::logout();			
		}		

		return Redirect::to('ingresar');

	}
}
?>