@extends('header')
@section('body')
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h2> Clientes </h2>
        </div>
    </div>
    <hr />
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Listado de clientes 
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="clientes-datatable">
                        <thead>
                            <tr>
                                <th class="col-md-1">Id</th>
                                <th class="col-md-3">Raz&oacute;n Social</th>
                                <th class="col-md-3">NIT</th>
                                <th class="col-md-2">Cliente</th>
                                <th class="col-md-2">Antecedentes</th>
                                <th class="col-md-1">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $clients as $client)
                            <tr class="odd gradeX">
                                <td>{{ $client->public_id }}</td>
                                <td>{{ $client->business_name }}</td>
                                <td>{{ $client->nit }}</td>
                                <td class="center">{{ $client->name }}</td>
                                <td class="center">{{ $client->description }}</td>
                                <td class="center">X</td>
                            </tr>                        
                            @endforeach                                
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</div>
</div>
{{ HTML::script('vendor/bcore/plugins/dataTables/jquery.dataTables.js') }}   
    {{ HTML::script('vendor/bcore/plugins/dataTables/dataTables.bootstrap.js') }}   
<script type="text/javascript">    
         $(document).ready(function () {
             $('#clientes-datatable').dataTable({
                "bLengthChange": false,
                "pageLength": 100,                
             });
         });
</script>
@stop