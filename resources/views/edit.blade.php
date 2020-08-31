@extends('parent')



@section('main')
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>
<br>

<form method="post" action="{{route('crud.update',$data->id)}}" enctype="multipart/form-data">
	
    @csrf
    @method('PATCH')

    <div class="form-group">
    	<label class="col-md-4 text-right">Name</label>
    	<div class="col-md-8">
    		<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg"/>
    	</div>
    </div>
    <div class="form-group">
    	<label class="col-md-4 text-right">EAN</label>
    	<div class="col-md-8">
    		<input type="file" name="image1"/>
    		<img src="{{ URL::to('/') }}/images1/{{ $data->image1 }}" class="img-thumbnail" width="100" />
    		<input type="hidden" name="hidden_image1" value="{{ $data->image1 }}">
    	</div>
    </div>
    <div class="form-group">
    	<label class="col-md-4 text-right">Type</label>
    	<div class="col-md-8">
    		<input type="text" name="type" value="{{ $data->type }}" class="form-control input-lg"/>
    	</div>
    </div>
    <div class="form-group">
    	<label class="col-md-4 text-right">Weight</label>
    	<div class="col-md-8">
    		<input type="text" name="weight" value="{{ $data->weight }}" class="form-control input-lg"/>
    	</div>
    </div>
    <div class="form-group">
    	<label class="col-md-4 text-right">Color</label>
    	<div class="col-md-8">
    		<input type="text" name="color" value="{{ $data->color }}" class="form-control input-lg"/>
    	</div>
    </div>

    <div class="form-group">
    	<label class="col-md-4 text-right">Active</label>
    	<div class="col-md-8">
    		<input type="text" name="active" value="{{ $data->active }}" class="form-control input-lg"/>
    	</div>
    </div>
    <div class="form-group">
    	<label class="col-md-4 text-right">Image</label>
    	<div class="col-md-8">
    		<input type="file" name="image"/>
    		<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
    		<input type="hidden" name="hidden_image" value="{{ $data->image }}">
    	</div>
    </div>
    <div class="form-group">
    	<label class="col-md-4 text-right">Quantity</label>
    	<div class="col-md-8">
    		<input type="text" name="quantity" value="{{ $data->quantity }}" class="form-control input-lg"/>
    	</div>
    </div>
    <div class="form-group">
    	<label class="col-md-4 text-right">Price</label>
    	<div class="col-md-8">
    		<input type="text" name="price" value="{{ $data->price }}" class="form-control input-lg"/>
    	</div>
    </div>
    <div class="form-group text-center"> 
    	<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit"/>
    </div>
</form>
@endsection