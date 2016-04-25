@extends('header')
@section('body')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h2> Unidades </h2>
        </div>
    </div>
    <hr />
    <div class="row">
    <div class="col-lg-12">
        <div class="box primary">            
            <header>
                    <div class="icons"><i class="icon-group"></i></div>
                    <h5>Unidad: {{$unit->name}}</h5>
                    <div class="toolbar">
                        <a class="btn btn-danger btn-sm btn-grad" href="">Eliminar</a>
                    </div>
                </header>
            <div class="panel-body">
                <div class="col-lg-6">           
                    <h4>Informaci&oacute;n</h4>
                    <blockquote>
                       <i class="icon-group"></i> <label>Nombre: </label> {{$unit->name}}
                       <small>nombre
                        </small>
                        <i class="icon-group"></i> <label>S&iacute;mbolo: </label> {{$unit->symbol}}
                       <small>Nombre del simolo
                        </small>                  
                        <i class="icon-group"></i> <label>Desctipci&oacute;n: </label> {{$unit->description}}
                       <small>Descipcion adicional
                        </small>                            
                    </blockquote>                    
                </div>                
               <hr>
            </div>
<div class="col-lg-12">
    <div class="col-lg-3"></div>
    <div class="col-lg-2"><a class="btn btn-warning" href="{{asset('unidades')}}"><i class="icon-ban-circle icon-white"></i> Cancelar</a></div>
    <div class="col-lg-2"></div>
        <div class="col-lg-2"><a class="btn btn-primary" href="{{asset('unidad/editar/'.$unit->public_id)}}"><i class="icon-pencil icon-white"></i> Editar</a></div>
</div>
        </div>
    </div>
</div>
</div>
{{ HTML::script('vendor/bcore/plugins/dataTables/jquery.dataTables.js') }}   
    {{ HTML::script('vendor/bcore/plugins/dataTables/dataTables.bootstrap.js') }}   

@stop