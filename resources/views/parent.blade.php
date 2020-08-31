<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script src="{{asset('js/jquery-3.5.1.js')}}"></script>
</head>
<body>
	<div class="background-color">
    <div class="container">
    	<br/>
    	<h3 align="center"></h3>
    	<br/>
    	@yield('main')
    </div>
    </div>
</body>
</html>