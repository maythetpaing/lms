@extends('frontendtemplate')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-5 col-sm-12">

      <p class="text-dark">Warmly Welcome to Our website</p>
      <br>
      <span class="text-justify"><i class="fas fa-envelope-square fas fa-2x"></i>
      librarymit@gmail.com</span>

  </div>
  <div class="col-md-7 col-sm-12">
    <form class="box mb-5">
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