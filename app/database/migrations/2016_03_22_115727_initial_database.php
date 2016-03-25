<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialDatabase extends Migration {

	/**
	 * Run the migrations.
	 * @Vrian7
	 * @return void
	 */
	public function up()
	{
		/*Schema::create('',function($table){

		});*/
		Schema::create('currencies',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('symbol');
			$table->timestamps();
			$table->softDeletes();
		});
		Schema::create('invoice_statuses',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->timestamps();
			$table->softDeletes();
		});
		Schema::create('enterprice_types',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('initials');
			$table->timestamps();
			$table->softDeletes();
		});
		Schema::create('enterprices',function($table){
			$table->increments('id');
			$table->unsignedInteger('currency_id')->index()->default(1);
			$table->unsignedInteger('enterprice_type')->index();
			$table->string('name');
			$table->string('mail');
			$table->string('domain')->unique();
			$table->string('nit');
			$table->string('owner')->nullable();			
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('currency_id')->references('id')->on('currencies');			
			//extralabels
			$table->string('client_extra1');
			$table->string('client_extra2');
			$table->string('client_extra3');
			$table->string('client_extra4');
			$table->string('client_extra5');
		});
		Schema::create('roles',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('permissions')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
		Schema::create('dosage_types',function($table){						
			$table->increments('id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->mediumText('template')->nullable();
			$table->timestamps();
			$table->softDeletes();			
		});
		Schema::create('dosages',function($table){
			$table->increments('id');
			$table->unsignedInteger('dosage_type_id')->index();
			$table->unsignedInteger('enterprice_id')->index();			
			$table->string('name');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->string('phone');
			$table->unsignedInteger('branch_number');
			$table->string('process_number');
			$table->string('document');
			$table->string('economic_activity');
			$table->string('legend');
			$table->string('dosage_key');
			$table->string('invoice_extra_fields');			
			$table->unsignedInteger('invoice_counter')->default('1');
			$table->unsignedInteger('public_id');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('dosage_type_id')->references('id')->on('dosage_types');
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('users',function($table){
			$table->increments('id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->unsignedInteger('rol_id')->index();
			$table->unsignedInteger('dosage_id')->nullable();
			$table->string('name');
			$table->string('username');
			$table->string('password');
			$table->string('phone');
			$table->string('avatar');
			$table->unsignedInteger('public_id');
			$table->boolean('locked')->default(false);
			$table->boolean('logged')->default(false);
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
			$table->foreign('rol_id')->references('id')->on('roles');
		});
		Schema::create('logs',function($table){
			$table->increments('id');
			$table->unsignedInteger('user_id')->index();
			$table->unsignedInteger('enterprice_id')->index();
			$table->string('type');
			$table->string('action');
			$table->string('ip');
			$table->unsignedInteger('public_id');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});	
		Schema::create('units',function($table){
			$table->increments('id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->unsignedInteger('public_id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('symbol');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('brands',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('manofacturer')->nullable();
			$table->string('provider')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('categories',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->string('name');
			$table->string('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('price_types',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->string('name');
			$table->string('description')->nullable();			
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});

		Schema::create('prices',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->unsignedInteger('unit_id')->index();
			$table->unsignedInteger('brand_id')->index();
			$table->string('name');
			$table->string('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('products',function($table){
			$table->increments('id');
			$table->unsignedInteger('enterprice_id')->index();			
			$table->unsignedInteger('unit_id')->index();
			$table->unsignedInteger('brand_id')->index();
			$table->unsignedInteger('category_id')->index();
			$table->string('name');
			$table->string('description');
			$table->string('code');			
			$table->unsignedInteger('public_id');
			$table->timestamps();
			$table->softDeletes();			
			$table->foreign('category_id')->references('id')->on('categories');
			$table->foreign('brand_id')->references('id')->on('brands');
			$table->foreign('unit_id')->references('id')->on('units');			
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('inventories',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->unsignedInteger('dosage_id')->index();
			$table->unsignedInteger('product_id')->index();
			$table->decimal('stock', 13, 2)->default(0);
			$table->string('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('product_id')->references('id')->on('products');
			$table->foreign('dosage_id')->references('id')->on('dosages');
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('clients',function($table){
			$table->increments('id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->unsignedInteger('public_id');
			$table->string('name');
			$table->string('business_name');
			$table->string('nit');
			$table->string('address');
			$table->string('phone');
			$table->string('description')->nullable();
			$table->string('symbol');
			$table->double('debt');
			$table->double('flow');
			$table->string('contact_data');
			$table->string('extra1');
			$table->string('extra2');
			$table->string('extra3');
			$table->string('extra4');
			$table->string('extra5');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('invoices',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();

			/*** INDEX of related tables***/
			$table->unsignedInteger('dosage_id');
			$table->unsignedInteger('user_id');			
			$table->unsignedInteger('client_id');
			$table->unsignedInteger('dosage_type_id');	
			$table->string('invoice_status_ids');		
			/*** Addional account data***/
			$table->string('nit');
			$table->string('authorization_number');
			$table->string('matriz_address');
			$table->string('city');
			$table->string('country');
			$table->date('deadline');
			/*** Aditional client data***/
			//$table->

			/*** numerical data***/
			$table->double('net_amount');
			$table->double('total_amount');
			$table->double('taxable_amount');
			$table->float('tax_amount');
			$table->float('ice_amount');
			$table->double('excent_amount');
			$table->float('discount');
			$table->float('exchange');
			$table->double('net_amount_dollar');
			//$table-> seuq esiente que poco a pococ todo se va a al migrationsauq



			/*** Invoice Data***/
			$table->unsignedInteger('number');
			$table->date('date');			
			$table->unsignedInteger('notes');
			$table->string('control_code');
			$table->string('legend');			
			//$table->string('');
			$table->unsignedInteger('especification');
			//nit,nombre usuario, nombre o rqazon social, direccion, codigo sucursal, codigo tipo factura,nombrecomprador,dui,indentificador comprador,
			//debito fiscal, importeneto, importe total, importe ice, importe exento, descuento total, codigo cde control, num de autorizacion,
			//numero de factura, actividad economica, fecha emision, numerio de linea, detalle de la compra, precio unitario, canidad m unidad ede medidam, preciototal
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('dosage_id')->references('id')->on('dosages');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('dosage_type_id')->references('id')->on('dosage_types');
			$table->foreign('client_id')->references('id')->on('clients');
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('invoice_details',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->unsignedInteger('invoice_id')->index();
			$table->unsignedInteger('product_id')->index();		
			$table->string('name');
			$table->string('code');
			$table->double('cost');
			$table->float('quantity');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('product_id')->references('id')->on('products');
			$table->foreign('invoice_id')->references('id')->on('invoices');
			$table->foreign('enterprice_id')->references('id')->on('enterprices');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
