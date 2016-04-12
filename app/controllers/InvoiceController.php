<?php 
class InvoiceController extends \BaseController{
	public function index(){

	}
	public function show($public_id){

	}
	public function create(){
		$products = Product::where('enterprice_id',Auth::user()->enterprice_id)->get();
		$data = [
			'products' => $products,
			'last_invoice_date' => 5,
		];
		return View::make('invoice.create',$data);
	}
	public function store(){

	}
	public function edit($public_id){

	}
	public function update($public_id){

	}
	public function delete($public_id){
		
	}
}
?>