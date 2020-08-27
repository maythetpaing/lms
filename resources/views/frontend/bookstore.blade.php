@extends('frontendtemplate')
@section('content')

		

		<div class="container-fluid bg-light">
		<!-- Top Navigation -->
		<h2 id="resize-effect" class="mt-5 text-center bg-light">
  <span aria-hidden="true">
    <span>Welcome</span>
    <span>to </span>
    <span>Library</span>
  </span>
</h2>
		<div class="row">
		
			@foreach($books as $book)
				@if($book_count[$book->id] < $book->noc)
				
			<div class="col-md-4 col-sm-6">
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
						
							<h3 style="color: #23A38F;">{{$book->name}}</h3>
							<span  style="color: #23A38F;">Written By->{{$book->author->name}}</span><br>
							<span  style="color: #23A38F;">{{$book->category->name}}</span>
							<p  style="color: white;">{{$book->desciption}}</p>
						
					</li>
					</ul>

				</li>

			</ul>
			
			</div>
			@endif
			@endforeach

		</div>
		
	
		


	</div>
@endsection