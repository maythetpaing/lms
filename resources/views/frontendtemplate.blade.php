<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  {{-- new --}}
  <meta name="description" content="Animated Books with CSS 3D Transforms" />
  <meta name="keywords" content="book, 3d, interactive, animated, 3d transform, css, web design" />
  <meta name="author" content="Marco Barría for Codrops" />
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/normalize.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/demo.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/book.css')}}" />
  <script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Library Management System</title>
  <link rel="icon" href="{{asset('backend/img/logo.png')}}" class="w-100 h-100">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  {{-- Fontawesome --}}
  <link href="{{asset('frontend/fontawesome/css/all.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/shop-homepage.css')}}" rel="stylesheet">
  <link href="{{asset('backend/css/sb-admin-2.css')}}" rel="stylesheet">
 

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('backend/img/logo.png')}}" class="img-fluid logo">
        <h6 class="text-white">UCS Library</h6>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('home')}}">
              <i class="fas fa-home"></i>
              Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('bookstore')}}">
              <i class="fas fa-book"></i>
            Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">
              <i class="far fa-file-alt"></i>
            About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">
              <i class="fas fa-address-book"></i>
            Contact</a>
          </li>
        {{--   <li class="nav-item">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('profile') }}">Profile
               </a>
               <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </li> --}}
    </ul>
  </div>
</div>
</nav>

<!-- Page Content -->
<div class="container">

  <div class="row">
    @yield('sidebar')
    <!-- /.col-lg-3 -->

    @yield('content')
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
{{-- <footer class="py-2">
  <iframe src="https://calendar.google.com/calendar/embed?src=en.mm%23holiday%40group.v.calendar.google.com&ctz=Asia%2FYangon" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
  </div> --}}
  <!-- /.container -->
{{-- </footer> --}}

{{-- <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FYangon" style="border:solid 1px #777" width="200" height="200" frameborder="0" scrolling="no"></iframe> --}}

<!-- footer -->
<footer class="footer">

<div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-12 py-2" style="color: black;">
      <h1 class="text-center">Hello</h1>
      <p>The basic functions of library management include, but are not limited to: planning and negotiating the acquisition of materials, Interlibrary Loan (ILL) requests, stacks maintenance, overseeing fee collection, event planning, fundraising, and human resources.</p>
    </div>
    <div class="col-md-4 col-sm-12  py-2" style="color: black;">
      <h1 class="text-center">Wellcome to</h1>
      <p>Most of the libraries that store physical media like books, periodicals, film, and other objects adhere to some derivative of the Dewey Decimal System as their method for tagging, storing, and retrieving materials based on unique identifiers.</p>
    </div>
    <div class="col-md-4 col-sm-12 py-2" style="color: black;">
      <h1 class="text-center">Our library</h1>
      <p>The use of such systems have caused librarians to develop and leverage common constructs that act as tools for both library professionals and library users alike. These constructs include master catalogs, domain catalogs, indexes, unique identifiers, unique identifier tokens, and artifacts .</p>
    </div>
  </div> 
</div>  

 
  <div class="container text-light text-center text-white text-monospace">
   <div class="container py-2">
     <hr>
    <p class="footertext m-0">Copyright &copy; All Right Result | Powered By Web-Design-2020 </p>
   </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/vendor/select.js')}}"></script>
@yield('script')
</body>

</html>
