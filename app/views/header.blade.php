<!--
	created by Brian Barrera ©Vrian7
	Copyright: all right reserved 
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>@yield('title','Factucom')</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- GLOBAL STYLES -->
		{{ HTML::style('vendor/bcore/plugins/bootstrap/css/bootstrap.css') }}
		{{ HTML::style('vendor/bcore/css/main.css') }}
		{{ HTML::style('vendor/bcore/css/theme.css') }}
		{{ HTML::style('vendor/bcore/css/MoneAdmin.css') }}		
		{{ HTML::style('vendor/bcore/plugins/Font-Awesome/css/font-awesome.css') }}
		{{ HTML::style('vendor/bcore/plugins/dataTables/dataTables.bootstrap.css') }}
		{{ HTML::style('vendor/bcore/plugins/chosen/chosen.min.css') }}
		<!--END GLOBAL STYLES -->
		<!-- PAGE LEVEL STYLES -->
		{{-- HTML::style('vendor/bcore/css/layout2.css') --}}
		{{-- HTML::style('vendor/bcore/plugins/flot/examples/examples.css') --}}
		{{-- HTML::style('vendor/bcore/plugins/timeline/timeline.css') --}}
		
		<!-- END PAGE LEVEL  STYLES -->

		{{ HTML::script('vendor/bcore/plugins/jquery-2.0.3.min.js') }}
		{{ HTML::script('vendor/bcore/plugins/bootstrap/js/bootstrap.js') }}
		{{ HTML::script('vendor/bcore/js/login.js') }}
		{{ HTML::script('vendor/bcore/plugins//chosen/chosen.jquery.min.js') }}
		@yield('head')
	</head>
	<body class="padTop53 ">
		<div id="wrap" >
			<!-- HEADER SECTION -->
	        <div id="top">

	            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
	                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
	                    <i class="icon-align-justify"></i>
	                </a>
	                <!-- LOGO SECTION -->
	                <header class="navbar-header">

	                    <a href="index.html" class="navbar-brand">
	                    <img src="{{asset('vendor/bcore/img/logo.png')}}" alt="" />
	                        
	                        </a>
	                </header>
	                <!-- END LOGO SECTION -->
	                <ul class="nav navbar-top-links navbar-right">

	                    <!-- MESSAGES SECTION -->
	                    <li class="dropdown">
	                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                            <span class="label label-success">2</span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
	                        </a>

	                        <ul class="dropdown-menu dropdown-messages">
	                            <li>
	                                <a href="#">
	                                    <div>
	                                       <strong>John Smith</strong>
	                                        <span class="pull-right text-muted">
	                                            <em>Today</em>
	                                        </span>
	                                    </div>
	                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
	                                        <br />
	                                        <span class="label label-primary">Important</span> 

	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <strong>Raphel Jonson</strong>
	                                        <span class="pull-right text-muted">
	                                            <em>Yesterday</em>
	                                        </span>
	                                    </div>
	                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
	                                         <br />
	                                        <span class="label label-success"> Moderate </span> 
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <strong>Chi Ley Suk</strong>
	                                        <span class="pull-right text-muted">
	                                            <em>26 Jan 2014</em>
	                                        </span>
	                                    </div>
	                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
	                                         <br />
	                                        <span class="label label-danger"> Low </span> 
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a class="text-center" href="#">
	                                    <strong>Read All Messages</strong>
	                                    <i class="icon-angle-right"></i>
	                                </a>
	                            </li>
	                        </ul>

	                    </li>
	                    <!--END MESSAGES SECTION -->

	                    <!--TASK SECTION -->
	                    <li class="dropdown">
	                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                            <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
	                        </a>

	                        <ul class="dropdown-menu dropdown-tasks">
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <p>
	                                            <strong> Profile </strong>
	                                            <span class="pull-right text-muted">40% Complete</span>
	                                        </p>
	                                        <div class="progress progress-striped active">
	                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
	                                                <span class="sr-only">40% Complete (success)</span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <p>
	                                            <strong> Pending Tasks </strong>
	                                            <span class="pull-right text-muted">20% Complete</span>
	                                        </p>
	                                        <div class="progress progress-striped active">
	                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
	                                                <span class="sr-only">20% Complete</span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <p>
	                                            <strong> Work Completed </strong>
	                                            <span class="pull-right text-muted">60% Complete</span>
	                                        </p>
	                                        <div class="progress progress-striped active">
	                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	                                                <span class="sr-only">60% Complete (warning)</span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <p>
	                                            <strong> Summary </strong>
	                                            <span class="pull-right text-muted">80% Complete</span>
	                                        </p>
	                                        <div class="progress progress-striped active">
	                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	                                                <span class="sr-only">80% Complete (danger)</span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a class="text-center" href="#">
	                                    <strong>See All Tasks</strong>
	                                    <i class="icon-angle-right"></i>
	                                </a>
	                            </li>
	                        </ul>

	                    </li>
	                    <!--END TASK SECTION -->

	                    <!--ALERTS SECTION -->
	                    <li class="chat-panel dropdown">
	                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
	                        </a>

	                        <ul class="dropdown-menu dropdown-alerts">

	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <i class="icon-comment" ></i> New Comment
	                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <i class="icon-twitter info"></i> 3 New Follower
	                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <i class="icon-envelope"></i> Message Sent
	                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <i class="icon-tasks"></i> New Task
	                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a href="#">
	                                    <div>
	                                        <i class="icon-upload"></i> Server Rebooted
	                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
	                                    </div>
	                                </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li>
	                                <a class="text-center" href="#">
	                                    <strong>See All Alerts</strong>
	                                    <i class="icon-angle-right"></i>
	                                </a>
	                            </li>
	                        </ul>

	                    </li>
	                    <!-- END ALERTS SECTION -->

	                    <!--ADMIN SETTINGS SECTIONS -->

	                    <li class="dropdown">
	                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
	                        </a>

	                        <ul class="dropdown-menu dropdown-user">
	                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
	                            </li>
	                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
	                            </li>
	                            <li class="divider"></li>
	                            <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
	                            </li>
	                        </ul>

	                    </li>
	                    <!--END ADMIN SETTINGS -->
	                </ul>

	            </nav>

	        </div>
	        <!-- END HEADER SECTION -->

		    <!-- MENU SECTION -->
	       <div id="left" >
	            <div class="media user-media well-small">
	                <a class="user-link" href="#">
	                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{asset('vendor/bcore/img/user.gif')}}" />
	                </a>
	                <br />
	                <div class="media-body">
	                    <h5 class="media-heading"> Joe Romlin</h5>
	                    <ul class="list-unstyled user-info">
	                        
	                        <li>
	                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
	                           
	                        </li>
	                       
	                    </ul>
	                </div>
	                <br />
	            </div>

	            <ul id="menu" class="collapse">

	                
	                <li class="panel active">
	                    <a href="index.html" >
	                        <i class="icon-desktop"></i> Resumen		   	                      
	                    </a>                   
	                </li>
	                <li><a href="{{asset('clientes')}}"><i class="icon-group"></i> Clientes </a></li>



	                <li class="panel ">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
	                        <i class="icon-tasks"> </i> Inventario
		   
	                        <span class="pull-right">
	                          <i class="icon-angle-left"></i>
	                        </span>
	                       &nbsp; <span class="label label-default">10</span>&nbsp;
	                    </a>
	                    <ul class="collapse" id="component-nav">
	                       
	                        <li class=""><a href="{{asset('productos')}}"><i class="icon-angle-right"></i> Productos </a></li>
	                         <li class=""><a href="{{asset('categorias')}}"><i class="icon-angle-right"></i> Categorias	 </a></li>
	                        <li class=""><a href="progress.html"><i class="icon-angle-right"></i> Progress </a></li>
	                        <li class=""><a href="tabs_panels.html"><i class="icon-angle-right"></i> Tabs & Panels </a></li>
	                        <li class=""><a href="notifications.html"><i class="icon-angle-right"></i> Notification </a></li>
	                         <li class=""><a href="more_notifications.html"><i class="icon-angle-right"></i> More Notification </a></li>
	                        <li class=""><a href="modals.html"><i class="icon-angle-right"></i> Modals </a></li>
	                          <li class=""><a href="wizard.html"><i class="icon-angle-right"></i> Wizard </a></li>
	                         <li class=""><a href="sliders.html"><i class="icon-angle-right"></i> Sliders </a></li>
	                        <li class=""><a href="typography.html"><i class="icon-angle-right"></i> Typography </a></li>
	                    </ul>
	                </li>
	                <li class="panel ">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
	                        <i class="icon-shopping-cart"></i> Ventas
		   
	                        <span class="pull-right">
	                            <i class="icon-angle-left"></i>
	                        </span>	
	                          &nbsp; <span class="label label-success">5</span>&nbsp;
	                    </a>
	                    <ul class="collapse" id="form-nav">
	                        <li class=""><a href="{{asset('facturas')}}"><i class="icon-angle-right"></i> Facturas </a></li>
	                        <li class=""><a href="forms_advance.html"><i class="icon-angle-right"></i> Advance </a></li>
	                        <li class=""><a href="forms_validation.html"><i class="icon-angle-right"></i> Validation </a></li>
	                        <li class=""><a href="forms_fileupload.html"><i class="icon-angle-right"></i> FileUpload </a></li>
	                        <li class=""><a href="forms_editors.html"><i class="icon-angle-right"></i> WYSIWYG / Editor </a></li>
	                    </ul>
	                </li>

	                <li class="panel">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
	                        <i class="icon-building"></i> Dosificaci&oacute;n
		   
	                        <span class="pull-right">
	                            <i class="icon-angle-left"></i>
	                        </span>
	                          &nbsp; <span class="label label-info">6</span>&nbsp;
	                    </a>
	                    <ul class="collapse" id="pagesr-nav">
	                        <li><a href="{{asset('sucursales')}}"><i class="icon-angle-right"></i> Sucursales </a></li>
	                        <li><a href="{{asset('examen')}}"><i class="icon-angle-right"></i> Examen SFV </a></li>
	                        <li><a href="pages_social.html"><i class="icon-angle-right"></i> Social </a></li>
	                        <li><a href="pages_pricing.html"><i class="icon-angle-right"></i> Pricing </a></li>
	                        <li><a href="pages_offline.html"><i class="icon-angle-right"></i> Offline </a></li>
	                        <li><a href="pages_uc.html"><i class="icon-angle-right"></i> Under Construction </a></li>
	                    </ul>
	                </li>
	                <li class="panel">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
	                        <i class="icon-bar-chart"></i> Charts
		   
	                        <span class="pull-right">
	                            <i class="icon-angle-left"></i>
	                        </span>
	                          &nbsp; <span class="label label-danger">4</span>&nbsp;
	                    </a>
	                    <ul class="collapse" id="chart-nav">



	                        <li><a href="charts_line.html"><i class="icon-angle-right"></i> Line Charts </a></li>
	                        <li><a href="charts_bar.html"><i class="icon-angle-right"></i> Bar Charts</a></li>
	                        <li><a href="charts_pie.html"><i class="icon-angle-right"></i> Pie Charts </a></li>
	                        <li><a href="charts_other.html"><i class="icon-angle-right"></i> other Charts </a></li>
	                    </ul>
	                </li>

	                <li class="panel">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
	                        <i class=" icon-sitemap"></i> 3 Level Menu
		   
	                        <span class="pull-right">
	                            <i class="icon-angle-left"></i>
	                        </span>
	                    </a>
	                    <ul class="collapse" id="DDL-nav">
	                        <li>
	                            <a href="#" data-parent="#DDL-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL1-nav">
	                                <i class="icon-sitemap"></i>&nbsp; Demo Link 1
		   
	                        <span class="pull-right" style="margin-right: 20px;">
	                            <i class="icon-angle-left"></i>
	                        </span>


	                            </a>
	                            <ul class="collapse" id="DDL1-nav">
	                                <li>
	                                    <a href="#"><i class="icon-angle-right"></i> Demo Link 1 </a>

	                                </li>
	                                <li>
	                                    <a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
	                                <li>
	                                    <a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>

	                            </ul>

	                        </li>
	                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
	                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
	                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 4 </a></li>
	                    </ul>
	                </li>
	                <li class="panel">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4-nav">
	                        <i class=" icon-folder-open-alt"></i> 4 Level Menu
		   
	                        <span class="pull-right">
	                            <i class="icon-angle-left"></i>
	                        </span>
	                    </a>
	                    <ul class="collapse" id="DDL4-nav">
	                        <li>
	                            <a href="#" data-parent="DDL4-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_1-nav">
	                                <i class="icon-sitemap"></i>&nbsp; Demo Link 1
		   
	                        <span class="pull-right" style="margin-right: 20px;">
	                            <i class="icon-angle-left"></i>
	                        </span>


	                            </a>
	                            <ul class="collapse" id="DDL4_1-nav">
	                                <li>

	                                    <a href="#" data-parent="#DDL4_1-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_2-nav">
	                                        <i class="icon-sitemap"></i>&nbsp; Demo Link 1
		   
	                        <span class="pull-right" style="margin-right: 20px;">
	                            <i class="icon-angle-left"></i>
	                        </span>
	                                    </a>
	                                    <ul class="collapse" id="DDL4_2-nav">



	                                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 1 </a></li>
	                                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
	                                    </ul>



	                                </li>
	                                <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
	                                <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
	                            </ul>

	                        </li>
	                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
	                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
	                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 4 </a></li>
	                    </ul>
	                </li>
	                <li class="panel">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
	                        <i class="icon-warning-sign"></i> Error Pages
		   
	                        <span class="pull-right">
	                            <i class="icon-angle-left"></i>
	                        </span>
	                          &nbsp; <span class="label label-warning">5</span>&nbsp;
	                    </a>
	                    <ul class="collapse" id="error-nav">
	                        <li><a href="errors_403.html"><i class="icon-angle-right"></i> Error 403  </a></li>
	                        <li><a href="errors_404.html"><i class="icon-angle-right"></i> Error 404  </a></li>
	                        <li><a href="errors_405.html"><i class="icon-angle-right"></i> Error 405  </a></li>
	                        <li><a href="errors_500.html"><i class="icon-angle-right"></i> Error 500  </a></li>
	                        <li><a href="errors_503.html"><i class="icon-angle-right"></i> Error 503  </a></li>
	                    </ul>
	                </li>


	                <li><a href="gallery.html"><i class="icon-film"></i> Image Gallery </a></li>
	                <li><a href="tables.html"><i class="icon-table"></i> Data Tables </a></li>
	                <li><a href="maps.html"><i class="icon-map-marker"></i> Maps </a></li>

	                <li><a href="grid.html"><i class="icon-columns"></i> Grid </a></li>
	                 <li class="panel">
	                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
	                        <i class="icon-check-empty"></i> Blank Pages
		   
	                        <span class="pull-right">
	                            <i class="icon-angle-left"></i>
	                        </span>
	                         &nbsp; <span class="label label-success">2</span>&nbsp;
	                    </a>
	                    <ul class="collapse" id="blank-nav">
	                       
	                        <li><a href="blank.html"><i class="icon-angle-right"></i> Blank Page One  </a></li>
	                        <li><a href="blank2.html"><i class="icon-angle-right"></i> Blank Page Two  </a></li>
	                    </ul>
	                </li>
	                <li><a href="login.html"><i class="icon-signin"></i> Login Page </a></li>

	            </ul>

	        </div>
	        <!--END MENU SECTION -->	        
	        <div id="content">
	        	@yield('body')
	        </div>
	        
		</div>
		

		<div id="footer">
        <p>&copy;  Factucom &nbsp;2016 &nbsp;</p>
    	</div>
		
		
	</body>
</html>