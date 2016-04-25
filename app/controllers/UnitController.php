<?php 
class UnitController extends \BaseController{
	public function index(){
		$units = Unit::where('enterprice_id',Auth::user()->enterprice_id)->get();
		$data = [
			'units' => $units,
		];
		return View::make('unit.index',$data);
	}
	public function show($public_id){
		$unit = Unit::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$data = [
			'unit' => $unit,
		];
		return View::make('unit.show',$data);
	}
	public function create(){
		return View::make('unit.create');
	}
	public function store(){
		$unit = new Unit();
		$unit->enterprice_id = Auth::user()->enterprice_id;
		$unit->name = Input::get('name');
		$unit->symbol = Input::get('symbol');
		$unit->description = Input::get('description');
		$unit->save();
		Session::flash('title','creacion de unidad');
		Session::flash('text','creacino del ciente milford correcto.. felicidades!!!');
		return Redirect::to('unidades');
	}
	public function edit($public_id){
		$unit = Unit::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$data = [
			'unit' => $unit,
		];
		return View::make('unit.edit',$data);
	}
	public function update($public_id){
		$unit = Unit::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();		
		$unit->name = Input::get('name');
		$unit->symbol = Input::get('symbol');
		$unit->description = Input::get('description');
		$unit->save();
		Session::flash('title','creacion de unidad');
		Session::flash('text','creacino del ciente milford correcto.. felicidades!!!');
		return Redirect::to('unidades');
	}
	public function delete($public_id){
		
	}
}
?>