<?php 
class InvoiceController extends \BaseController{
	public function index(){
		/*$ent = Enterprice::where('id',Auth::user()->enterprice_id)->first();
		$data = [
			'link' => "hola.com",
			'enterprice' => $ent->name,
		];
		return View::make('mail.invoice',$data);
		return;*/
		$invoices = Invoice::where('enterprice_id',Auth::user()->enterprice_id)->where('branch_id',Auth::user()->branch_id)->get();
		//$statuses = InvoiceStatus::where('id',$invoi)->first();

		$data = [
			'invoices' => $invoices,
			'statuses' => "Emitido",//$statuses->name,
		];
		return View::make('invoice.index',$data);
	}
	public function show($public_id){
		$invoice = Invoice::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$products = InvoiceDetail::where('invoice_id',$invoice->id)->get();
		$ent = Enterprice::where('id',Auth::user()->enterprice_id)->first();
		$data = [
			'invoice' => $invoice,			
			'products' => $products,
			'logo' => $ent->logo
		];
		return View::make('invoice.show',$data);
	}
	public function showStandard($public_id){
		$invoice = Invoice::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$products = InvoiceDetail::where('invoice_id',$invoice->id)->get();
		$ent = Enterprice::where('id',Auth::user()->enterprice_id)->first();
		$data = [
			'invoice' => $invoice,			
			'products' => $products,
			'logo' => $ent->logo,
			'type' => 'ORIGINAL',
		];
		return View::make('invoice.view',$data);	
	}
	public function showCopy($public_id){
		$invoice = Invoice::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$products = InvoiceDetail::where('invoice_id',$invoice->id)->get();
		$ent = Enterprice::where('id',Auth::user()->enterprice_id)->first();
		$data = [
			'invoice' => $invoice,			
			'products' => $products,
			'logo' => $ent->logo,
			'type' => 'Copia para: '.Input::get('copy'),
		];
		return View::make('invoice.view',$data);	
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
		$client = Client::where('id',Input::get('client'))->first();
		$branch = Branch::where('id',Auth::user()->branch_id)->first();
		$central = Branch::where('id',Auth::user()->branch_id)->where('central_house',1)->first();
		$tool = new Tool();
		$invoice = new Invoice();
		$invoice->enterprice_id = Auth::user()->enterprice_id;
		$invoice->branch_id = Auth::user()->branch_id;
		$invoice->branch_type_id = $branch->branch_type_id;
		$invoice->user_id = Auth::user()->id;
		$invoice->client_id = Input::get('client');
		$invoice->invoice_status_ids = 1;
		$invoice->nit = $client->nit;
		$invoice->client_name = $client->business_name;
		$invoice->client_nit = $client->nit;
		$invoice->authorization_number = $branch->authorization_number;
		$invoice->dosage_key = $branch->dosage_key;
		$invoice->matriz_address = $central->address;
		$invoice->city = $branch->city;
		$invoice->country = "no";//$branch->country;
		$invoice->deadline = $branch->deadline;
		$invoice->net_amount = Input::get('total');
		$invoice->total_amount = Input::get('subtotal');
		$invoice->taxable_amount = Input::get('total');
		$invoice->tax_amount = $invoice->taxable_amount * 0.13;
		$invoice->ice_amount = 0;
		$invoice->excent_amount = 0;
		$invoice->discount = Input::get('descuento_send');
		$invoice->exchange = 6.96;
		$invoice->net_amount_dollar = 0;
		$date_send = Input::get('date');
		$date_send = explode('/',$date_send);
		$invoice->date = $date_send[2].'-'.$date_send[1].'-'.$date_send[0];
		$invoice->notes = "";
		$invoice->legend = $branch->legend;
		$invoice->especification = "";
		$invoice->number = $branch->getInvoiceNumber($branch->id);
		$fecha = trim(Input::get('date'));
        $fecha=  explode("/",$fecha);            
        $date=$fecha[2].$fecha[1].$fecha[0];           
		$invoice->control_code =$tool->generateControlCode($invoice->number,$invoice->nit,$date,$invoice->net_amount,$invoice->authorization_number,$invoice->dosage_key);
		$invoice->save();	
		foreach (Input::get('productos') as $key => $producto) {
			if($producto['code']!=""){
			$product = Product::where('enterprice_id',Auth::user()->enterprice_id)->where('code',$producto['code'])->first();			
			$detail = new InvoiceDetail();			
			$detail->enterprice_id = Auth::user()->enterprice_id;
			$detail->invoice_id = $invoice->id;			
			$detail->product_id = $product->id;
			$detail->code = $producto['code'];
			$detail->name = $producto['name'];
			$detail->price = $producto['price'];
			$detail->quantity = $producto['quantity'];						
			$detail->save();
			}
		}		
		$inv = Invoice::where('id',$invoice->id)->first();
		$data = [
			'public_id' => $inv->public_id,
			'number' => $inv->number,
		];
		return View::make('invoice.showStandard',$data);
	}
	public function edit($public_id){
		

	}
	public function update($public_id){
		if(Input::get('action')==1){
			$this->sendInvoice($public_id,Input::get('name'),Input::get('mail'));			
			return Redirect::to('facturas');	
		}
		if(Input::get('action')==2){
			$inv = Invoice::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
			$data = [
				'public_id' => $inv->public_id,
				'number' => $inv->number,
				'copy' => Input::get('copy'),
			];
			return View::make('invoice.showCopy',$data);			
		}
		if(Input::get('action')==3){
			$invoice = Invoice::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
			$invoice->invoice_status_ids = "2";
			$invoice->save();
			return Redirect::to('facturas');	
		}		
	}
	public function delete($public_id){
		
	}
	public function previewInvoice(){
		$client = Client::where('id',Input::get('client'))->first();	
		$branch = Branch::where('id',Auth::user()->branch_id)->first();
		$central = Branch::where('id',Auth::user()->branch_id)->where('central_house',1)->first();
		//$tool = new Tool();
		$invoice = new Invoice();
		//$invoice->enterprice_id = Auth::user()->enterprice_id;
		$invoice->branch_id = Auth::user()->branch_id;
		$invoice->branch_type_id = $branch->branch_type_id;
		$invoice->user_id = Auth::user()->id;
		$invoice->client_id = Input::get('client');
		$invoice->invoice_status_ids = 1;
		$invoice->nit = $client->nit;
		$invoice->client_name = $client->business_name;
		$invoice->client_nit = $client->nit;
		$invoice->authorization_number = $branch->authorization_number;
		$invoice->dosage_key = $branch->dosage_key;
		$invoice->matriz_address = $central->address;
		$invoice->city = $branch->city;
		$invoice->country = "no";//$branch->country;
		$invoice->deadline = $branch->deadline;
		$invoice->net_amount = Input::get('total');
		$invoice->total_amount = Input::get('subtotal');
		$invoice->taxable_amount = Input::get('total');
		$invoice->tax_amount = $invoice->taxable_amount * 0.13;
		$invoice->ice_amount = 0;
		$invoice->excent_amount = 0;
		$invoice->discount = Input::get('descuento_send');
		$invoice->exchange = 6.96;
		$invoice->net_amount_dollar = 0;
		$date_send = Input::get('date');
		$date_send = explode('/',$date_send);
		$invoice->date = $date_send[2].'-'.$date_send[1].'-'.$date_send[0];
		$invoice->notes = "";
		$invoice->legend = $branch->legend;
		$invoice->especification = "";
		$invoice->number = 0;//$branch->getInvoiceNumber($branch->id);
		$fecha = trim(Input::get('date'));
        $fecha=  explode("/",$fecha);            
        $date=$fecha[2].$fecha[1].$fecha[0];           
		$invoice->control_code = "XX-XX-XX-XX";//$tool->generateControlCode($invoice->number,$invoice->nit,$date,$invoice->net_amount,$invoice->authorization_number,$invoice->dosage_key);
		//$invoice->save();
		$products =array();
		foreach (Input::get('productos') as $key => $producto) {
			if($producto['code']!=""){
			$product = Product::where('enterprice_id',Auth::user()->enterprice_id)->where('code',$producto['code'])->first();			
			$detail = new InvoiceDetail();			
			//$detail->enterprice_id = Auth::user()->enterprice_id;
			//$detail->invoice_id = $invoice->id;			
			$detail->product_id = $product->id;
			$detail->code = $producto['code'];
			$detail->name = $producto['name'];
			$detail->price = $producto['price'];
			$detail->quantity = $producto['quantity'];			
			array_push($products, $detail);
			}
		}		
		$ent = Enterprice::where('id',Auth::user()->enterprice_id)->first();
		$data = [
			'invoice' => $invoice,
			'type'	=> 'Previsualizaci&oacute;n',
			'products' => $products,
			'logo' => $ent->logo
		];
		return View::make('invoice.view',$data);		
	}

	/*** ADITIONAL FUNCIONS ***/
	private function sendInvoice($public_id,$name,$mail){
		$invoice = Invoice::where('enterprice_id',Auth::user()->enterprice_id)->where('public_id',$public_id)->first();
		$branch = Branch::where('id',Auth::user()->branch_id)->first();
		$ent = Enterprice::where('id',Auth::user()->enterprice_id)->first();
		$data = [
			'link' => 'http://rusysve.com',
			'invoice' => $invoice,
			'branch' => $branch,		
			'enterprice' => $ent->name,
		];

		$data_message = [
			'name' => $name,
			'mail' => $mail,
			'enterprice' => $ent->name,
		];		

		Mail::send('mail.invoice', $data, function($message) use ($data_message){						
			$message->to($data_message['mail'], $data_message['name']);			
			$message->from('info@rusysve.com','FACTUFACIL');
			$message->subject('Factura: '.$data_message['enterprice']);
		});
	}


}
?>