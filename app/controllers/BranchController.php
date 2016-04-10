<?php 
class BranchController extends \BaseController{
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
		
	}
	public function test(){
		return View::make('branch.test');
	}
	public function testResult(){		
			$authorization = trim(Input::get('autorization'));
            $number = trim(Input::get('number'));
            $nit = trim(Input::get('nit'));            
            $fecha = trim(Input::get('date'));
            $fecha=  explode("/",$fecha);            
            $date=$fecha[2].$fecha[1].$fecha[0];           
            $amount = str_replace(',','.',Input::get('amount'));
            $key = trim(Input::get('dosage_key'));            
            $tool = new Tool();
            $codigoControl = $tool->generateControlCode($number,$nit,$date,$amount,$authorization,$key);
            return $codigoControl;
	}
}
?>