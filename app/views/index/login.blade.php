<!--
	created by Brian Barrera ©Vrian7
	Copyright: all right reserved 
-->
<!DOCTYPE html>
@extends('layout')
@section('title') Ingreso al Sistema @stop
@section('head') @stop
@section('body')
<div class="container">
	<div class="text-center">
		<img src="{{asset('vendor/bcore/img/logo.png')}}" id="logoimg" alt=" Logo" />
	</div>
	<div class="tab-content">
		<div id="login" class="tab-pane active">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Ingrese su Usuario y Password
                </p>
                <input type="text" placeholder="Usuario" class="form-control" />
                <input type="password" placeholder="Contraseña" class="form-control" />
                <button class="btn text-muted text-center btn-danger" type="submit">Ingresar</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Ingrese Correo Electr&oacute;nico</p>
                <input type="email"  required="required" placeholder="Correo Electrónico"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recuperar Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Porfavor ingrese los datos para registrarse</p>
                 <input type="text" placeholder="Nombre" class="form-control" />
                 <input type="text" placeholder="Apellidos" class="form-control" />
                <input type="text" placeholder="Empresa" class="form-control" />
                <input type="email" placeholder="Correo" class="form-control" />
                <input type="password" placeholder="Contraseña" class="form-control" />
                <input type="password" placeholder="Repita" class="form-control" />
                <button class="btn text-muted text-center btn-success" type="submit">Registrar</button>
            </form>
        </div>
	</div>
	<div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Ingresar</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Olvid&oacute; su password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Registrarse</a></li>
        </ul>
    </div>
</div>
@stop