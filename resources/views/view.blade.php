
@extends('parent')



@section('main')
<div class="jumbotron">
<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
</div>
<img src="{{ URL::to('/')}}/images/{{ $data->image }}" class="img-thumbnail"/>
      <h3>Name - {{ $data->name }}</h3>
<img src="{{ URL::to('/')}}/images1/{{ $data->image1 }}" class="img-thumbnail"/>
<h3>Type - {{ $data->type }}</h3>
<h3>Weight - {{ $data->weight }}</h3>
<h3>Color - {{ $data->color }}</h3>
<h3>Active - {{ $data->active  }}</h3>
<h3>Quantity - {{ $data->quantity }}</h3>
<h3>Price - {{ $data->price }}</h3>
</div>
</div>


@endsection

