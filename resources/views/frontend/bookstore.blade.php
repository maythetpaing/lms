@extends('frontendtemplate')
@section('content')

		

		<div class="container-fluid">
		<!-- Top Navigation -->
		<div class="row">
			@foreach($books as $book)
			<div class="col-md-6 col-sm-12">
			<ul class="align">
				<li>
					<figure class='book'>

						<!-- Front -->

						<ul class='hardcover_front'>
							<li>
								<div class="coverDesign yellow img-fluid">
									<img src="{{asset($book->photo)}}">
									<span class="ribbon"></span>
									<h1>{{$book->name}}</h1>
									<p>{{$book->category->name}}</p>
									
								</div>
							</li>
							<li></li>
						</ul>

						<!-- Pages -->

						<ul class='page'>
							<li></li>
							<li>
								{{-- <img src="{{asset($book->photo)}}"> --}}
								{{$book->description}}
							</li>
							
						</ul>

						<!-- Back -->
						
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
						
							<h3>{{$book->name}}</h3>
							<span>By*{{$book->author->name}}</span>
							<span>{{$book->category->name}}</span>
							<p>{{$book->desciption}}</p>
						
					</li>
					</ul>

				</li>

			</ul>
			
			</div>
			@endforeach

		</div>
		
	
		


	</div>
@endsection