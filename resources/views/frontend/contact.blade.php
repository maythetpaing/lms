@extends('frontendtemplate')
@section('content')
{{-- <p class="text-dark">Warmly Welcome to Our website</p> --}}
<div class="container-fluid mt-3" style="background-image: url({{asset('backend/img/l1.jpg')}})">
  <div class="row">
   <div class="col-md-6 col-sm-12 mt-5">

     <span class="text-justify" style="color: red;"><i class="fas fa-envelope-square fas fa-2x  text-info"></i>
     waiwai30919@gmail.com</span><br>
     <span class="text-justify"  style="color: red;"><i class="fas fa-envelope-square fas fa-2x text-info"></i>
     maythetpaing618@gmail.com</span>
   </div>
   <div class="col-md-6 col-sm-12 container-fluid mt-5">
    <form class="box table-responsive-sm">
      <div class="form-group mt-5">
        <input type="text" name="name" placeholder="Enter your Name">
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Enter your Email Address">
      </div>
      <div class="form-group">
       <textarea placeholder="Message"></textarea>
     </div>
     <div class="form-group">
      <input type="submit" name="contact" value="Send" class="bg-success">
    </div>
  </form>
</div>
</div>
</div>

@endsection
