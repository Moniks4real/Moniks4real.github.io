@extends('parent')


@section('main')

@if($errors->all())

<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
       @endforeach
	</ul>
</div>
@endif


<div class="jumbotron">
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>
<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">
  
  @csrf
       <div class="form-group">
       	  <label class="col-md-4  text-right">Name</label>
       	  <div>
       	  	<input type="text" name="name" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">EAN</label>
       	  <div>
       	  	<input type="file" name="image1" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">Type</label>
       	  <div>
       	  	<input type="text" name="type" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">Weight</label>
       	  <div>
       	  	<input type="text" name="weight" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">Color</label>
       	  <div>
       	  	<input type="text" name="color" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">Active</label>
       	  <div>
       	  	<input type="text" name="active" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">Image</label>
       	  <div>
       	  	<input type="file" name="image" />
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">Quantity</label>
       	  <div>
       	  	<input type="text" name="quantity" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group">
       	  <label class="col-md-4  text-right">Price</label>
       	  <div>
       	  	<input type="text" name="price" class="form-control input-lg"/>
       	  </div>
       </div>
       <br>
       <br>
       <br>
        <div class="form-group text-center">
       	  	<input type="submit" name="add" class="form-control input-lg" value="Add" />
       	  </div>
       <br>
       <br>
       <br>
	
</form>
</div>



@endsection