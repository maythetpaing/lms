@extends('frontendtemplate')
@section('content')
<div class="row">
		@foreach($books as $book)

		<div class="col-lg-3 col-md-6 mb-4 mt-5">
			<div class="card h-100">
				<img src="{{asset($book->photo)}}" alt="" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">
						{{$book->codeno}}
					</h4>
					<h5>{{$book->name}}</h5>
					
				</div>
				
			</div>
		</div>
		@endforeach



	</div>
@endsection