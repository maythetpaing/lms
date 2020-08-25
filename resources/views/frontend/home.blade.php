@extends('frontendtemplate')

@section('content')




	<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="{{asset('backend/img/l1.jpg')}}" alt="First slide">
				<h1 class="text-center">Hello</h1>
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="{{asset('backend/img/l1.jpg')}}" alt="Second slide">
				<h1 class="text-center">Wellcome</h1>
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="{{asset('backend/img/l1.jpg')}}" alt="Third slide">
				<h2 class="text-center">UCS Library</h2>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	{{-- other --}}
	<div class="container mt-5">
		<h5 class="text-center p-0">Library</h5>
		<p class="text-center logo m-0 p-0"><b><i class="fas fa-utensils"></i>Good Book</b></p>
		<p class="text-center logoglass m-0 p-0"><i class="fas fa-glass-cheers"></i></p>
		<p class="text-center"></span></p>
	</div>
	<div class="container mt-5">
		<h5 class="text-center p-0">Library</h5>
		<p class="text-center logo m-0 p-0"><b><i class="fas fa-utensils"></i>Good Book</b></p>
		<p class="text-center logoglass m-0 p-0"><i class="fas fa-glass-cheers"></i></p>
		<p class="text-center"></span></p>
	</div>
	<div class="container mt-5">
		<h5 class="text-center p-0">Library</h5>
		<p class="text-center logo m-0 p-0"><b><i class="fas fa-utensils"></i>Good Book</b></p>
		<p class="text-center logoglass m-0 p-0"><i class="fas fa-glass-cheers"></i></p>
		<p class="text-center"></span></p>
	</div>
	<div id="calendar"></div>

{{-- </div> --}}
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

@endsection