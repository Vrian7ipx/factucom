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
		Schema::create('',function($table){

		});
		Schema::create('currency',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('symbol');
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
			$table->foreing('currency_id')->references('id')->on('currencies');
			$table->foreing('enterprice_id')->references('id')->on('enterprice_types');			
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
			$table->unsignedInteger('dosage_type_id')->index()
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
			$table->foreing('dosage_type_id')->references('id')->on('dosage_types');
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
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
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
			$table->foreing('rol_id')->references('id')->on('roles');
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
			$table->foreing('user_id')->references('id')->on('users');
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
		});	
		Schema::create('units',function($table){
			$table->increments('id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('symbol');
			$table->unsignedInteger('public_id');
			$table->timestamps();
			$table->softDeletes();
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
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
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('categories',function($table){
			$table->increments('id');
			$table->unsignedInteger('public_id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->string('name');
			$table->string('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
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
			$table->foreing('category_id')->references('id')->on('categories');
			$table->foreing('brand_id')->references('id')->on('brands');
			$table->foreing('unit_id')->references('id')->on('units');			
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
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
			$table->foreing('product_id')->references('id')->on('products');
			$table->foreing('dosage_id')->references('id')->on('dosages');
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
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
			/*** Addional account data***/
			$table->string('nit');
			$table->string('authorization_number');
			$table->string('matriz_address');
			$table->string('city');
			$table->string('country');
			$table->date('deadline');
			/*** Aditional client data***/
			$table->

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
			$table->



			/*** Invoice Data***/
			$table->unsignedInteger('number');
			$table->date('date');			
			$table->unsignedInteger('notes');
			$table->string('control_code');
			$table->string('legend');			
			$table->string('');
			nit,nombre usuario, nombre o rqazon social, direccion, codigo sucursal, codigo tipo factura,nombrecomprador,dui,indentificador comprador,
			debito fiscal, importeneto, importe total, importe ice, importe exento, descuento total, codigo cde control, num de autorizacion,
			numero de factura, actividad economica, fecha emision, numerio de linea, detalle de la compra, precio unitario, canidad m unidad ede medidam, preciototal
			$table->timestamps();
			$table->softDeletes();
			$table->foreing('dosage_id')->references('id')->on('dosages');
			$table->foreing('user_id')->references('id')->on('users');
			$table->foreing('dosage_type_id')->references('id')->on('dosage_types');
			$table->foreing('client_id')->references('id')->on('clients');
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
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
