<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index.dashboard');
});

Route::group(array('domain'=>'{enterprice}.factucom.inv'),function(){
	/*** USER CONTROLLER ***/
	//Route::get('ingresar','UserController@login');

	

	Route::get('ingresar',function($enterprice){
		return View::make('index.login',array('domain' => $enterprice));			
	});
	Route::post('ingresar','UserController@enter');
	Route::get('salir','UserController@logout');
	/*** ENTERPRICECONTROLLER ***/
	Route::get('registrar','EnterpriceController@register');

	Route::post('registrar','EnterpriceController@store');

	Route::get('inicio', function()
	{
		return View::make('index.dashboard');
	});


});

Route::group(array('before' => 'auth'), function(){
	
	/*** CLIENTCONTROLLER ***/
	Route::get('clientes','ClientController@index');
	Route::get('cliente','ClientController@create');
	Route::post('cliente','ClientController@store');
	Route::get('cliente/{public_id}','ClientController@show');
	Route::get('cliente/editar/{public_id}','ClientController@edit');
	Route::post('cliente/editar/{public_id}','ClientController@update');
	Route::get('cliente/eliminar/{public_id}','ClientController@delete');
	Route::get('buscar_cliente','ClientController@findByString');
	

	/*** CATEGORYCONTROLLER ***/
	Route::get('categorias','CategoryController@index');
	Route::get('categoria','CategoryController@create');
	Route::post('categoria','CategoryControllerr@store');
	Route::get('categoria/{public_id}','CategoryController@show');
	Route::get('categoria/editar/{public_id}','CategoryController@edit');
	Route::post('categoria/editar/{public_id}','CategoryController@update');
	Route::get('categoria/eliminar/{public_id}','CategoryController@delete');

	/*** PRODUCTCONTROLLER ***/
	Route::get('productos','ProductController@index');
	Route::get('producto','ProductController@create');
	Route::post('producto','ProductController@store');
	Route::get('producto/{public_id}','ProductController@show');
	Route::get('producto/editar/{public_id}','ProductController@edit');
	Route::post('producto/editar/{public_id}','ProductController@update');
	Route::get('producto/eliminar/{public_id}','ProductController@delete');

	/*** BRANCHCONTROLLER ***/
	Route::get('sucursales','BranchController@index');
	Route::get('sucursal','BranchController@create');
	Route::post('sucursal','BranchController@store');
	Route::get('sucursal/{public_id}','BranchController@show');
	Route::get('sucursal/editar/{public_id}','BranchController@edit');
	Route::post('sucursal/editar/{public_id}','BranchController@update');
	Route::get('sucursal/eliminar/{public_id}','BranchController@delete');	
	Route::get('examen','BranchController@test');
	Route::post('examen','BranchController@testResult');

	/*** INVOICECONTROLLER ***/
	Route::get('facturas','InvoiceController@index');
	Route::get('factura','InvoiceController@create');
	Route::post('factura','InvoiceController@store');
	Route::get('factura/{public_id}','InvoiceController@show');
	Route::get('factura/editar/{public_id}','InvoiceController@edit');
	Route::post('factura/editar/{public_id}','InvoiceController@update');
	Route::get('factura/eliminar/{public_id}','InvoiceController@delete');	
	Route::get('factura/nuevo/previsualizar','InvoiceController@previewInvoice');
	Route::get('factura/estandar/{public_id}','InvoiceController@showStandard');
	Route::get('factura/copia/{public_id}','InvoiceController@showCopy');
	
	/*** USERCONTROLLER ***/
	Route::get('usuarios','UserController@index');
	Route::get('usuario','UserController@create');
	Route::post('usuario','UserController@store');
	Route::get('usuario/{public_id}','UserController@show');
	Route::get('usuario/editar/{public_id}','UserController@edit');
	Route::post('usuario/editar/{public_id}','UserController@update');
	Route::get('usuario/eliminar/{public_id}','UserController@delete');	
});