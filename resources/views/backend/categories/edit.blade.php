@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Edit</h2>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('categories.update',$category->id)}}">
			@csrf
			@method('PUT')
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="{{$category->name}}">
			</div>
			
			
			
			<input type="submit" value="Update" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection