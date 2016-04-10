<?php 
class ClientController extends \BaseController{
	public function index(){
		$clients = Client::where('enterprice_id',Auth::user()->enterprice_id)->get();
		$data=[
			'clients' => $clients,
		];
		return View::make('client.index',$data);
	}
	public function show($public_id){

	}
	public function create(){		
		return View::make('client.create');
	}
	public function store(){
		$client = new Client();
		$client->enterprice_id = Auth::user()->enterprice_id;
		$client->name = Input::get('name');
		$client->business_name = Input::get('business_name');
		$client->nit = Input::get('nit');
		$client->address = Input::get('address');
		$client->phone = Input::get('phone');
		$client->description = Input::get('description');
		$client->debt = 0;
		$client->flow = 0;
		$client->contact_data = Input::get('contact_data');		
		$client->save();
		return 0;

	}
	public function edit($public_id){		
		$client = Client::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();		
		$data=[
			'client' => $client,
		];
		return View::make('client.edit',$data);	
	}
	public function update($public_id){
		$client = Client::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();		
		$client->name = Input::get('name');
		$client->business_name = Input::get('business_name');
		$client->nit = Input::get('nit');
		$client->address = Input::get('address');
		$client->phone = Input::get('phone');
		$client->description = Input::get('description');		
		$client->contact_data = Input::get('contact_data');		
		$client->save();
		return 0;
	}
	public function delete($public_id){

	}
}
?>

<!-- 
	public function index(){

	}
	public function show($public_id){

	}
	public function create(){

	}
	public function store(){

	}
	public function edit($public_id){

	}
	public function update($public_id){

	}
	public function delete($public_id){
		
	} -->