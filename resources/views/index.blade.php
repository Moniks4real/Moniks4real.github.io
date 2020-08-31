  
  <div class="background-color">
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.js')}}"></script>
</head>

<body>
@section('content')

@extends('layouts.app')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div align="right">
    <a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="jumbotron">
<table class="table  table-bordered  table-striped">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>EAN</th>
        <th>Type(size)</th>
        <th>Weight(kg)</th>
        <th>Color</th>
        <th>Active</th>
        <th>Quantity</th>
        <th>Price(euro)</th>
        <th>Action</th>
    </tr>
    @foreach($data as $row)
         <tr>
            <td><img src="{{URL::to('/')}}/images/{{$row->image}}" class="img-thumbnail" width="75" /></td>
            <td>{{$row->name}}</td>
            <td><img src="{{URL::to('/')}}/images1/{{$row->image1}}" class="img-thumbnail" width="75" /></td>
            <td>{{$row->type}}</td>
            <td>{{$row->weight}}</td>
            <td>{{$row->color}}</td>
            <td>{{$row->active}}</td>
            <td>{{$row->quantity}}</td>
            <td>{{$row->price}}</td>
            <td>
                <a href="{{ route('crud.show',$row->id) }}" class="btn btn-primary">Show</a><br/>
                <a href="{{ route('crud.edit',$row->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('crud.destroy',$row->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
         </tr>

    @endforeach
</table>
</div>
{!!$data->links()!!}
</body>
</html>
</div>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.js')}}"></script>
</head>
<body>


@endsection

</body>
</html>

