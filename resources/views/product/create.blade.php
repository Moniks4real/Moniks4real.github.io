@extends('master')


@section('content')


<div align="right"><a href="{{route('product.index')}}">Back</a></div>
<div class="row">
  <div class="col-md-12">
    <br/>
        <h3 align="center">Add Data</h3>
        <br/>
     @if(count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
            @endforeach
          </ul>
      </div>
       @endif
       @if(\Session::has('success'))
       <div class="alert alert success">
           <p>{{\Session::get('success')}}</p>
       </div>

       @endif
        <form method="post" action="{{url('product')}}">
             {{csrf_field()}}

          <div class="form-group">
            <input type="text" name="productdetails" class="form-control" placeholder="Enter Product Details "/>
          </div>
          <div class="form-group">
            <input type="text" name="pricehistory" class="form-control" placeholder="Enter Price History "/>
          </div>
          <div class="form-group">
            <input type="text" name="quantityhistory" class="form-control" placeholder="Enter Quantity History "/>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary"/>
          </div>
        </form>
  </div>
</div>
@endsection