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
<div class="panel-body">
    <div id="wizard" >
        <h2> Datos de la empresa </h2>
        <section>                
             <form role="form">
                <div class="form-group">
                    <label>Nombre de la empresa</label>
                    <input class="form-control" />
                    <p class="help-block">Nombre completo de la empresa</p>
                </div>
               
               <div class="form-group">
                    <label>Dominio</label>
                    <input class="form-control" />
                    <p class="help-block">Ejemplo: <strong>dominio</strong>.facturabolivia.com </p>
                </div>
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input class="form-control" />
                    <p class="help-block">Aqu&iacute; le llegar&aacute;n las notificaciones de FACTUFACIL</p>
                </div>
                <div class="form-group">
                    <label>NIT</label>
                    <input class="form-control" />
                    <p class="help-block">N&uacute;mero del identificaci&oacute;n tributaria </p>
                </div>
                <!-- <div class="form-group">
                    <label>Titular</label>
                    <input class="form-control" />
                    <p class="help-block">Titular de la empresa. Obligarotio si es unipersonal </p>
                </div> -->
             </form>                
        </section>
        <h2> Super Administrador </h2>
        <section>
            <form role="form">
                <div class="form-group">
                    <label> Nombre y Apellido</label>
                    <input class="form-control" />
                    <p class="help-block">Ingrese nombre y apellido real.</p>
                </div>
                 <div class="form-group">
                    <label>Nombre de usuario</label>
                    <input class="form-control" />
                    <p class="help-block">Usuario para ingresar al sistema.</p>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input class="form-control" />
                    <p class="help-block">Contrase&ntilde;a para el ingreso al sistema.</p>
                </div>
               <div class="form-group">
                    <label>Retype Password</label>
                    <input class="form-control" />
                    <p class="help-block">Repita contrase&ntilde;a.</p>
                </div>                               
            </form>
        </section>
        <h2>Extras </h2>
        <section>
            <form role="form">
                <div class="form-group">
                    <label> Occupation </label>
                    <input class="form-control" />
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                    <label> Qualification </label>
                    <input class="form-control" />
                    <p class="help-block">Example block-level help text here.</p>
                </div>
               <div class="form-group">
                    <label> Age </label>
                    <input class="form-control" />
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                    <label> Notes </label>
                    <input class="form-control" />
                    <p class="help-block">Example block-level help text here.</p>
                </div>
               
            </form>
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
</div>
</div>            
</div>
</div>
</div>


@stop