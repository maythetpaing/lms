@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Book Create</h2>

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
		<form enctype="multipart/form-data" method="post" action="{{route('books.store')}}">
			@csrf
			<div class="form-group">
				<label>Codeno:</label>
				<input type="text" name="codeno" class="form-control @error('codeno') is-invalid @enderror" id="codeno">
				@error('codeno')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
				@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="photo" class="form-control-file  @error('photo') is-invalid @enderror" id="photo">
				@error('photo')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			
			

			<div class="form-group">
				<label>No-Of-Copies</label>
				<input type="text" name="noc" class="form-control @error('noc') is-invalid @enderror" id="noc">
				@error('noc')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				
			</div>
			<div class="form-group">
				<label>Edition</label>
				<input type="text" name="edition" class="form-control @error('edition') is-invalid @enderror" id="edition">
				@error('edition')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				
			</div>
			<div class="form-group">
				<label>Author</label>
				<select name="author" class="form-control @error('author') is-invalid @enderror" id="author">
					@foreach($authors as $author)
					<option value="{{$author->id}}">{{$author->name}}</option>
					@endforeach
					@error('author')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
				</select>
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control @error('category') is-invalid @enderror" id="category">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
					@error('category')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
				</select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
				@error('description')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror

			</div>

			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection