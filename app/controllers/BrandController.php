<?php 
class BrandController extends \BaseController{
	public function index(){
		$brands = Brand::where('enterprice_id',Auth::user()->enterprice_id)->get();
		$data = [
			'brands' => $brands,
		];
		return View::make('brand.index',$data);
	}
	public function show($public_id){
		$brand = Brand::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$data = [
			'brand' => $brand,
		];
		return View::make('brand.show',$data);
	}
	public function create(){
		return View::make('brand.create');
	}
	public function store(){		
		$brand = new Brand();		
		$brand->enterprice_id = Auth::user()->enterprice_id;
		$brand->name = Input::get('name');
		$brand->description = Input::get('description');
		$brand->manofacturer = Input::get('manofacturer');
		$brand->provider = Input::get('provider');
		$brand->save();
		return Redirect::to('marcas');
	}
	public function edit($public_id){
		$brand = Brand::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$data = [
			'brand' => $brand,
		];
		return View::make('brand.edit',$data);
	}
	public function update($public_id){
		$brand = Brand::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$brand->name = Input::get('name');
		$brand->description = Input::get('description');
		$brand->manofacturer = Input::get('manofacturer');
		$brand->provider = Input::get('provider');
		$brand->save();
		return Redirect::to('marcas');
	}
	public function delete($public_id){
		
	}
}
?>