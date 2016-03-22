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
		{{ HTML::style('vendor/bcore/plugins/bootstrap/css/bootstrap.css') }}
		{{ HTML::style('vendor/bcore/css/login.css') }}
		{{ HTML::style('vendor/bcore/plugins/magic/magic.css') }}
		@yield('head')
	</head>
	<body>
		@yield('body')
		{{ HTML::script('vendor/bcore/plugins/jquery-2.0.3.min.js') }}
		{{ HTML::script('vendor/bcore/plugins/bootstrap/js/bootstrap.js') }}
		{{ HTML::script('vendor/bcore/js/login.js') }}
	</body>

</html>