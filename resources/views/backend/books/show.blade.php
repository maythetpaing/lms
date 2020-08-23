@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Book Detail</h2>
	<div class="row">
		<div class="col-md-4">
			<p><img src="{{asset($book->photo)}}" class="img-fluid "></p>
		</div>
		<div class="col-md-8">
			<h5>Code-no: {{$book->codeno}}</h5><hr>
			<h5>Name: {{$book->name}}</h5><hr>
			<h5>Author: {{$book->author->name}}</h5><hr>
			<h5>Category: {{$book->category->name}}</h5><hr>
			<h5>No-of-Copy: {{$book->noc}}</h5><hr>
			<h5>Edition: {{$book->edition}}</h5><hr>
			<h5>Description: {{$book->description}}</h5>

			
		</div>
		
	</div>
</div>
@endsection