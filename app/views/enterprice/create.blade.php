<!--
	created by Brian Barrera ©Vrian7
	Copyright: all right reserved 
-->
<!DOCTYPE html>
@extends('header')
@section('title') Registro de empresa @stop
@section('head') 
{{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/normalize.css') }}
{{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/wizardMain.css') }}
{{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/jquery.steps.css') }}
@stop
@section('body')
<!--
    created by Brian Barrera ©Vrian7
    Copyright: all right reserved 
-->
<!DOCTYPE html>
@extends('layout')
@section('title') Ingreso al Sistema @stop
@section('head')
    {{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/normalize.css') }}
{{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/wizardMain.css') }}
{{ HTML::style('vendor/bcore/plugins/jquery-steps-master/demo/css/jquery.steps.css') }}
@stop
@section('body')
<div class="conta
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
            <h2> Personal </h2>
            <section>                
         <form role="form">
            <div class="form-group">
                <label>First Name</label>
                <input class="form-control" />
                <p class="help-block">Example block-level help text here.</p>
            </div>
           
           <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" />
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" />
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                <label>Retype Email</label>
                <input class="form-control" />
                <p class="help-block">Example block-level help text here.</p>
            </div>                                                                            
         </form>
                    
                </section>

                <h2> Login </h2>
                <section>
                   <form role="form">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                       <div class="form-group">
                                            <label>Retype Password</label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label> Security Code </label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
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

                <h2>Agreement</h2>
                <section>
                    <p style="text-align:justify;color:gray;">
                        <b> Agreement & Declaration</b> <br /><br />
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