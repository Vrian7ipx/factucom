<!--
    created by Brian Barrera ©Vrian7
    Copyright: all right reserved 
-->
<!DOCTYPE html>
@extends('layout')
@section('title') Registro del sistema
@stop
@section('head')
    {{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/normalize.css') }}
    {{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/wizardMain.css') }}
    {{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/jquery.steps.css') }}
@stop
@section('body')
<div class="container">
<div class="inner  col-lg-12" >
    <div class="row">
        <div class="col-lg-12">
            <h2> Registro de empresa EMPRESA </h2>
        </div>
    </div>
    <hr />              
    <div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            NOmbre empresa
        </div>
<form  action="{{asset('registrar')}}"method="POST">
<div class="panel-body">
    <div id="wizard" >
        <h2> Datos de la empresa </h2>
        <section>                
             <!-- <form role="form"> -->
                <div class="form-group">
                    <label>Nombre de la empresa</label>
                    <input class="form-control" name='name'/>
                    <p class="help-block">Nombre completo de la empresa</p>
                </div>
               
               <div class="form-group">
                    <label>Dominio</label>
                    <div class="input-group">
                    <input class="form-control" nane='domain'/>                    
                    <span class="input-group-addon">.factufacil.bo</span>
                    </div>
                    <p class="help-block">Ejemplo: <strong>dominio</strong>.factufacil.bo </p>
                </div>
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input class="form-control" name='mail'/>
                    <p class="help-block">Aqu&iacute; le llegar&aacute;n las notificaciones de FACTUFACIL</p>
                </div>
                <div class="form-group">
                    <label>Tipo de empresa</label>
                    <!-- <input class="form-control" 'business_type'/> -->
                    <select data-placeholder='Elija tipo de empresa' name='enterprice_type' class="form-control chzn-select" >
                        <option value="1">SRL</option>
                        <option value="2">LTDA</option>
                        <option value="3">UNIPERSONAL</option>
                        <option value="4">no EMPRESA</option>
                    </select>
                    <p class="help-block">N&uacute;mero del identificaci&oacute;n tributaria </p>
                </div>
                <!-- <div class="form-group">
                    <label>Titular</label>
                    <input class="form-control" />
                    <p class="help-block">Titular de la empresa. Obligarotio si es unipersonal </p>
                </div> -->
             <!-- </form>                --> 
        </section>
        <h2> Super Administrador </h2>
        <section>
            <!-- <form role="form"> -->
                <div class="form-group">
                    <label> Nombre y Apellido</label>
                    <input class="form-control" name="user_name"/>
                    <p class="help-block">Ingrese nombre y apellido real.</p>
                </div>
                 <div class="form-group">
                    <label>Nombre de usuario</label>
                    <input class="form-control" name="user_user"/>
                    <p class="help-block">Usuario para ingresar al sistema.</p>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input class="form-control" type='password' name='password'/>
                    <p class="help-block">Contrase&ntilde;a para el ingreso al sistema.</p>
                </div>
               <div class="form-group">
                    <label>Reingrese la contrase</label>
                    <input class="form-control" type='password' name="password_re" />
                    <p class="help-block">Repita contrase&ntilde;a.</p>
                </div>                               
            <!-- </form> -->
        </section>
        <h2>Informaci&oacute;n tributaria </h2>
        <section>
            <!-- <form role="form"> -->
                <div class="form-group">
                    <label>  NIT </label>
                    <input class="form-control" name="nit" />
                    <p class="help-block">Ingrese n&uacte;mero de identificaci&oacute;n tributaria.</p>
                </div>
                <div class="form-group">
                    <label> Propietario </label>
                    <input class="form-control" name="owner" />
                    <p class="help-block">Obligatorio en caso de ser unipersonal.</p>
                </div>
               <div class="form-group">
                    <label> Moneda </label>
                    <input class="form-control" name="currency" />
                    <p class="help-block">Ingrese el tipo de moneda que utilizar&aacute;.</p>
                </div>
                <div class="form-group">
                    <label> Logo </label>
                    <input class="form-control" name="logo" />
                    <p class="help-block">Ingrese el logo de la empresa.</p>
                </div>
               
            <!-- </form> -->
        </section>
        <h2>Términos y Condiciones</h2>
        <section>
            <p style="text-align:justify;color:gray;">
                <b> Sobre la plataforma</b> <br /><br />
                Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                <br />  <br /> 
                Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                venenatis. Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.
                <br />                            
            </p>
        </section>
    </div>                         
    </form>
</div>
</div>            
</div>
</div>
</div>

@stop