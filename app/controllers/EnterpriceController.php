<?php
class EnterpriceController extends \BaseController{
	public function register(){			
		return View::make('enterprice.create');
			
	}

	public function store(){
		//print_r(Input::all());

		$file = Input::file('logo');
		$destinationPath = 'uploads/logos';		
			
		$ent = new Enterprice();
		$ent->currency_id = Input::get('currency');
		$ent->enterprice_type_id = Input::get('enterprice_type');
		$ent->name = Input::get('name');
		$ent->mail = Input::get('mail');
		$ent->domain = Input::get('domain');
		$ent->owner = Input::get('owner');
		$ent->nit = Input::get('nit');
		$filename = "logo-D".date("dmYHis").'.D'.$ent->domain.'N'.$ent->nit.'.'.Input::file('logo')->getClientOriginalExtension();	
		Input::file('logo')->move($destinationPath, $filename);		
		$ent->logo = $filename;
		$ent->save();

		$user = new User();
		$user->enterprice_id = $ent->id;
		$user->rol_id = 1;
		$user->name = Input::get('user_name');
		$user->username = $ent->domain.".".Input::get('user_user');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		$unit = new Unit();
		$unit->enterprice_id = $ent->id;
		$unit->name = "Unidad";
		$unit->symbol = "U";
		$unit->save();

		$bran = new Brand();
		$bran->enterprice_id = $ent->id;
		$bran->name = "General";
		$bran->manofacturer = "Ninguno";
		$bran->provider = "No";
		$bran->save();

		$cat = new Category();
		$cat->enterprice_id = $ent->id;
		$cat->name = "General";
		$cat->save();

		return Redirect::to('ingresar');
	}
	
}
?>