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

		</div>
		<div class="carousel-item">
			<img class="d-block img-fluid" src="{{asset('backend/img/l1.jpg')}}" alt="Second slide">

		</div>
		<div class="carousel-item">
			<img class="d-block img-fluid" src="{{asset('backend/img/l1.jpg')}}" alt="Third slide">

		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

	</a>
</div>
<div class="container-fluid">
	<h2 class="w-100 mt-1  p-5 pb-5 h-25 bg-light text-dark text-center mb-5">Open from <time>10:00</time> to <time>15:00</time> every weekday</h2>
</div>
{{-- add --}}
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h3>What is puprose of Library?</h3>
			<ul style="list-style-type:square">
				<li>A curated collection of sources of information and similar resources</li>
				<li>Selected by experts and made accessible to a defined community for reference or borrowing</li>
				<li>Often in a quiet environment conducive to study</li>
				<li> Libraries range widely in size up to millions of items</li>
			</ul>
		</div>
		<div class="col-md-5">
			<img src="{{asset('backend/img/d.jpeg')}}" class="img-fluid">
		</div>
	</div>

</div>
{{-- jkk --}}
  <div class="container my-4">

    
    <h4 class="bg-light mt-3"><strong>We Suggested!</h4>

    <hr>

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Extreme Programming</h4>
                  <p class="card-text">Programming is the process of creating a set of instructions that tell a computer how to perform a task.</p>
                  <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/1.png')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Web Developer</h4>
                  <p class="card-text">Maybe you're secretly thinking: what do web designers do? Or maybe even: what is web design?</p>
                   <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">C#</h4>
                  <p class="card-text">C# (C-Sharp) is a programming language developed by Microsoft that runs on the .NET Framework. </p>
                   <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">C++</h4>
                  <p class="card-text">C++ is a general-purpose programming language created by Bjarne as an extension of the C programming language</p>
                   <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Python</h4>
                  <p class="card-text">Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum </p>
                   <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">PHP</h4>
                  <p class="card-text">PHP is a popular general-purpose scripting language that is especially suited to web development. </p>
                  <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Java</h4>
                  <p class="card-text">Java can drive innovation, & improve application services;first programming language for IoT, enterprise architecture, and cloud ...</p>
                   <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">HTML5</h4>
                  <p class="card-text">HTML5 is a markup language used for structuring and presenting content on the World Wide Web.</p>
                   <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('backend/img/d.jpeg')}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">CSS</h4>
                  <p class="card-text">CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed.</p>
                   <a href="{{route('bookstore')}}" class="btn btn-primary">View More</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>



{{-- </div> --}}
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

@endsection