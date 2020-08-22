@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Department Create(Form)</h2>

	
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('departments.store')}}">
			@csrf
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name">
				@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			
			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection