@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Member Create</h2>

	{{-- @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif --}}
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('members.store')}}">
			@csrf

			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
				@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
				@error('email')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone">
				@error('phone')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				
			</div>
			
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address"></textarea>
				@error('address')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror

			</div>

			<div class="form-group">
				<label>RollNo/Departments</label>
				<input type="text" name="edulevel" class="form-control @error('edulevel') is-invalid @enderror" id="edulevel">
				@error('edulevel')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>

			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection