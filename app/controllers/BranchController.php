<?php 
class BranchController extends \BaseController{
	public function index(){

	}
	public function show($public_id){

	}
	public function create(){
		$types = BranchType::get();
		$data = [
			'types' => $types
		];
		return View::make('branch.create',$data);
	}
	public function store(){
		$branch = new Branch();
		$branch->enterprice_id = Auth::user()->enterprice_id;
		$branch->branch_type_id = Input::get('branch_type');
		$branch->name = Input::get('name');
		$branch->address = Input::get('address');
		$branch->city = Input::get('city');
		$branch->state = Input::get('state');
		$branch->zone = Input::get('zone');
		$branch->phone = Input::get('phone');
		$branch->number = Input::get('number');
		$branch->process_number = Input::get('process_number');
		$branch->authorization_number = Input::get('authorization_number');
		$branch->deadline = Input::get('deadline');
		$branch->economic_activity = Input::get('activity');
		$branch->legend = Input::get('legend');
		$branch->dosage_key = Input::get('dosage_key');
		$branch->invoice_counter = 0;
		$doc = BranchType::where('id',$branch->branch_type_id)->first();
		$branch->document = $doc->template;
		$branch->save();
		return 0;
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