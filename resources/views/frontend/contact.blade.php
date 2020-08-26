@extends('frontendtemplate')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-sm-12">
      
        <p class="form1 font">Warmly Welcome to Our website</p>
        <br>
        <span class="text-justify"><i class="fas fa-arrows-alt"></i></i>
      librarymit@gmail.com</span>
      </a>
    </div>
    <div class="col-md-6 col-sm-12">
      <form class="box">
      <h2 style="color: white;">Contact Us</h2>
        <div class="form-group">
        <input type="text" name="name" placeholder="Enter your Name">
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Enter your Email Address">
      </div>
      <div class="form-group">
       <textarea placeholder="Message"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="contact" value="Send">
      </div>
      </form>
    </div>

    
  </div>
     
      </div>
 @endsection