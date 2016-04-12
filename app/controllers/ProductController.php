<?php 
class ProductController extends \BaseController{
	public function index(){
		return 0;
	}
	public function show($public_id){

	}
	public function create(){
		$cate = Category::where('enterprice_id',Auth::user()->enterprice_id)->get();
		$uni = Unit::where('enterprice_id',Auth::user()->enterprice_id)->get();
		$bran = Brand::where('enterprice_id',Auth::user()->enterprice_id)->get();
		$data=[
			'categories' => $cate,
			'units' => $uni,
			'brands' => $bran,
		];
		return View::make('product.create',$data);
	}
	public function store(){
		$product = new Product();
		$product->enterprice_id = Auth::user()->enterprice_id;
		$product->unit_id = Input::get('unit');
		$product->category_id = Input::get('category');
		$product->brand_id = Input::get('brand');
		$product->name = Input::get('name');
		$product->code = Input::get('code');
		$product->price = Input::get('price');
		$product->description = Input::get('description');
		$product->save();

		return 0;

	}
	public function edit($public_id){

	}
	public function update($public_id){

	}
	public function delete($public_id){
		
	}
}
?>