@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Book Edit(Form/old value)</h2>
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
		<form enctype="multipart/form-data" method="post" action="{{route('books.update',$book->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Codeno:</label>
				<input type="text" name="codeno" class="form-control" value="{{$book->codeno}}" readonly="readonly">
			</div>
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="{{$book->name}}">
			</div>
			<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="photo" class="form-control-file">
				<img src="{{asset($book->photo)}}">
				<input type="hidden" name="oldphoto" value="{{$book->photo}}">
			</div>
			<div class="form-group">
				<label>Edition:</label>
				<input type="text" name="edition" class="form-control" value="{{$book->edition}}">
			</div>
			<div class="form-group">
				<label>No-Of-Copy:</label>
				<input type="text" name="noc" class="form-control" value="{{$book->noc}}">
			</div>

			

			<div class="form-group">
				<label>Author</label>
				<select name="author" class="form-control">
					@foreach($authors as $author)
					<option value="{{$author->id}}"
						@if($author->id==$book->author_id)
						{{'selected'}}
						@endif
						>
						{{$author->name}}</option>
					@endforeach

				</select>
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control">
					@foreach($categories as $category)
					<option value="{{$category->id}}"
					@if($category->id==$book->category_id)
						{{'selected'}} 
						@endif
						>{{$category->name}}</option>
					@endforeach
					
				</select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description" >{{$book->description}}</textarea>
			</div>

			<input type="submit" value="Update" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection