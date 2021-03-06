@extends('header')
@section('body')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Crear Nuevo Cliente</h3>
        </div>
    </div>
<form class="form-horizontal" method="POST" action="{{asset('cliente')}}">
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons"><i class="icon-file-alt"></i></div>
            <h5>Datos del examen</h5>
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
                    <label for="text1" class="control-label col-lg-4">N&uacute;mero de autorizaci&oacute;n</label>

                    <div class="col-lg-8">
                        <input type="text" id='authorization' placeholder="Campo num&eacute;rico" name='authorization' class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">N&uacute;mero de factura</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Campo num&eacute;rico" id="number" name="number" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">NIT</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Campo num&eacute;rico" id="nit" name="nit" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Fecha</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Formato: dd/mm/aaaa. ejemplo: 01/12/2016" id="date" name="date" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Total</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="N&uacute;mero con separador decimal '.'. Ejemplo: 15234.45" id="amount" name="amount" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Llave de dosificaci&oacute;n</label>
                    <div class="col-lg-8">
                        <input type="text"  placeholder="Campo alfanum&eacute;rico. " id="dosage_key" name="dosage_key" class="form-control" />
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Resultado:</label>
                    <div class="col-lg-8 input-group">
                        <input type="text" id="control_code" readonly placeholder="Resultado" class="form-control" />
                        <span class="input-group-btn">
                                                <button id="generate" class="btn btn-default" type="button">
                                                    Generar C&oacute;digo de control
                                                </button>
                                            </span>
                    </div>
                </div>              

                            
        </div>

        
    </div>
</div>

<div class="col-lg-12">
	<div class="col-lg-3"></div>
	<div class="col-lg-2"><a class="btn btn-primary" href="{{asset('/')}}"><i class="icon-ban-circle icon-white"></i> Cancelar</a></div>
	<div class="col-lg-2"></div>
	<div class="col-lg-2"><a id="clear" class="btn btn-success" ><i class="icon-pencil icon-white"></i> Nuevo</a></div>
</div>
</form>
</div>


 <script type="text/javascript">          
          $("#clear").click(function(){
                $("#authorization").val('');
                $("#number").val('');
                $("#nit").val('');
                $("#date").val('');
                $("#amoun6t").val('');
                $("#dosage_key").val('');
                $("#control_code").val('');
           });
           
        $('#date').on('keypress', function(e) {
        if (e.which == 32)
            return false;
        });
        $("#control_code").click(function(){
        $("#control_code").select();
        });
           
          $("#generate").click(function(){
            authorization = $("#authorization").val();
            number =  $("#number").val();
            nit =  $("#nit").val();
            date = $("#date").val();
            amount = $("#amount").val();
            dosage_key = encodeURIComponent($("#dosage_key").val());
            $.ajax({
                  type: 'POST',
                  url:'{{ URL::to('examen') }}',
                  data: 'authorization='+authorization+'&number='+number+'&nit='+nit+'&date='+date+'&amount='+amount+'&dosage_key='+dosage_key,
                  beforeSend: function(){
                    $("#control_code").val("Generando C&oacute;digo de control");
                  },
                  success: function(result)
                  {                      
                      $("#control_code").val(result).select();
                  }
            });
        });
      </script>

@stop