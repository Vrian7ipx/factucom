@extends('header')
@section('body')

<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Crear Nueva Sucursal</h3>
        </div>
    </div>
<form class="form-horizontal" method="POST" action="{{asset('sucursal')}}">
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons"><i class="icon-home"></i></div>
            <h5>Datos de la Sucursal</h5>
            <div class="toolbar">
                <ul class="nav">
                    <!-- <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-th-large"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Demo Link</a></li>
                            <li><a href="#">Demo Link</a></li>
                            <li><a href="#">Demo Link</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-1">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        
        <div id="div-1" class="accordion-body collapse in body">
            
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Nombre de la sucursal</label>

                    <div class="col-lg-8">
                        <input type="text"  placeholder="Nombre para identificar a la sucursal" name='name' class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Tipo de sucursal</label>
                    <div class="col-lg-8">
                        <select data-placeholder="Tipo de sucursal" name="branch_type" class="form-control chzn-select chzn-rtl" tabindex="9">
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach                        
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Actividad Econ&oacute;mica</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Activdad econ&oacute;mica de la sucursal" name="activity" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Direcci&oacute;n</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Direcci&oacute; de la sucursal" name="address" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Zona</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Zona" name="zone" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Ciudad</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Activdad econ&oacute;mica de la sucursal" name="city" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Municipio</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Municipio" name="state" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Tel&eacute;fono</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Activdad econ&oacute;mica de la sucursal" name="phone" class="form-control" />
                    </div>
                </div>                        
        </div>    
    </div>
</div>
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons"><i class="icon-key"></i></div>
            <h5>Datos de la dosificaci&oacute;n</h5>
            <div class="toolbar">
                <ul class="nav">
                    <!-- <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-th-large"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Demo Link</a></li>
                            <li><a href="#">Demo Link</a></li>
                            <li><a href="#">Demo Link</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-2">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div id="div-2" class="accordion-body collapse in body">            
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">N&uacute;mero de tr&aacute;mite</label>

                    <div class="col-lg-8">
                        <input type="text"  placeholder="N&uacute;mero de seguimiento de tramite" name="process_number" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">N&uacute;mero de Autorizaci&oacute;n</label>

                    <div class="col-lg-8">
                        <input type="text"  placeholder="N&uacute;mero de autorizaci&oacute;n de la dosificaci&oacute;n" name="authorization_number" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">N&uacute;mero de Sucursal</label>

                    <div class="col-lg-8">
                        <input type="text"  placeholder="Asignada por impuestos." name="number" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Fecha l&iacute;mite de emisi&oacute;n</label>
                    <div class="col-lg-8">
                        <input type="text" name="deadline" class="form-control" placeholder="Fecha asignada por impuestos" data-date-format="dd/mm/yyyy" id="date" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Llave de dosificaci&oacute;n</label>
                    <div class="col-lg-8">
                        <input type="text" placeholder="Cadena." name="dosage_key" class="form-control" />
                    </div>
                </div>  
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Leyenda seg&uacute;n LEY Nº453</label>
                    <div class="col-lg-8">
                        <input type="text" placeholder="Puede encontrarla en su ficha de dosificaci&oacute;n." name="legend" class="form-control" />
                    </div>
                </div>
        </div>
    </div>
    <hr>       
</div>
<div class="col-lg-12">
	<div class="col-lg-3"></div>
	<div class="col-lg-2"><a class="btn btn-primary" href="{{asset('sucursales')}}"><i class="icon-ban-circle icon-white"></i> Cancelar</a></div>
	<div class="col-lg-2"></div>
	<div class="col-lg-2"><button class="btn btn-success" type="submit"><i class="icon-save icon-white"></i> Guardar</a></div>
</div>
</form>
</div>
<script type="text/javascript">
    $("#date").datepicker();
</script>
@stop