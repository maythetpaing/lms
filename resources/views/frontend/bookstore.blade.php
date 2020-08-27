@extends('frontendtemplate')
@section('content')
<div class="container-fluid bg-light">
	<div class="row">
		@foreach($books as $book)
		<div class="col-md-4 col-sm-12">
			<ul class="align">
				<li>
					<figure class='book'>
						<ul class='hardcover_front'>
							<li>
								<div class="coverDesign yellow img-fluid">
									<img src="{{asset($book->photo)}}" class="img-fluid">
									<span class="ribbon img-fluid" style="width: 90px;">{{$book->codeno}}</span>
									<h1>{{$book->name}}</h1>
									<p>{{$book->category->name}}</p>
									
								</div>
							</li>
							<li></li>
						</ul>
						<ul class='page'>
							<li></li>
							<li>
								{{$book->description}}
							</li>
						</ul>
						<ul class='hardcover_back'>
							<li></li>
							<li></li>
						</ul>
						<ul class='book_spine'>
							<li></li>
							<li></li>
						</ul>
					</figure>
					<ul>
						<li>
							
							<h3 style="color: #23A38F;">{{$book->name}}</h3>
							<span  style="color: #23A38F;">Written By->{{$book->author->name}}</span><br>
							<span  style="color: #23A38F;">{{$book->category->name}}</span>
							<p  style="color: white;">{{$book->desciption}}</p>
						</ul>

					</li>

				</ul>
				
			</div>
			@endforeach
		</div>
	</div>
	@endsection