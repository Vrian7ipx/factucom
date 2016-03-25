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
		Schema::create('dosages',function($table){
			$table->increments('id');
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
			$table->string('law');
			$table->string('dosage_key');
			$table->string('invoice_extra_fields');			
			$table->unsignedInteger('invoice_counter')->default('1');
			$table->unsignedInteger('public_id');
			$table->timestamps();
			$table->softDeletes();
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
			$table->unsignedInteger('public_id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('symbol'):
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
			$table->timestamps();
			$table->softDeletes();
			$table->foreing('enterprice_id')->references('id')->on('enterprices');
		});
		Schema::create('products',function($table){
			$table->increments('id');
			$table->unsignedInteger('enterprice_id')->index();
			$table->unsignedInteger('unit_id')->index();
			$table->unsignedInteger('brand_id')->index();
			$table->string('name');
			$table->string('description');
			$table->string('code');
			
			$table->unsignedInteger('public_id');
			$table->timestamps();
			$table->softDeletes();
			$table->foreing('brand_id')->references('id')->on('brancs');
			$table->foreing('unit_id')->references('id')->on('units');
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
