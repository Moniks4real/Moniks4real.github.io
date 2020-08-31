<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}">
</head>
<body>


@extends('master')

@section('content')


<div class="row">
	<div class="col-md-12">
	<br/>
	<h3 align="center">PRODUCT PAGE</h3>
	<br/>
	<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>PRODUCT DETAILS</th>
		<th>PRICE HISTORY(In euro)</th>
		<th>QUANTITY HISTORY</th>
	</tr>
	@foreach($products as $row)
     <tr>
     	<td>{{$row['id']}}</td>
     	<td>{{$row['productdetails']}}</td>
     	<td>{{$row['pricehistory']}}</td>
     	<td>{{$row['quantityhistory']}}</td>
     </tr>
    @endforeach
</table>
</div>

@endsection
</body>
</html>