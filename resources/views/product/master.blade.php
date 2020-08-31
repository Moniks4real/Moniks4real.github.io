<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}">
	 <link rel="stylesheet" type="text/css" href="{{ asset('/css/w3.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css')}}">
     <script src="{{asset('/js/bootstrap.js') }}"></script>
     <script src="{{asset('/js/jquery-3.5.1.js')}}"></script>
	<title></title>
</head>
<body>
<div class="background-color">
<div class="container">
@yield('content')	
</div>
</div>
</body>
</html>