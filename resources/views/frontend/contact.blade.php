@extends('frontendtemplate')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    /* Full-width input fields */ input[type=text], input[type=password],textarea {
      width: 50%;
      padding: 12px 20px; margin: 8px 0;
      display: inline-block; border: 1px solid #ccc; box-sizing: border-box;
    }
    /* Set a style for all buttons */
    button {
      background-color: #4CAF50; color: white;
      padding: 14px 20px; margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 50%;
    }
    button:hover {
      opacity: 0.8; }
      /* Extra styles for the cancel button */ .cancelbtn {
        width: auto;
        padding: 10px 18px; background-color: #f44336;
      }
      /* Center the image and position the close button */ .imgcontainer {
        text-align: center; margin: 24px 0 12px 0; position: relative;
      }
      img.avatar { width: 40%;
        border-radius: 50%; }
        .container {
          padding: 16px;
        }
        span.psw {

          float: right;
          padding-top: 16px; }
          /* The Modal (background) */ .modal {
            display: none; /* Hidden by default / position: fixed; / Stay in place / z-index: 1; / Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed / background-color: rgb(0,0,0); / Fallback color / background-color: rgba(0,0,0,0.4); / Black w/ opacity */ padding-top: 60px;
          }
          /* Modal Content/Box */ .modal-content {
            background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom
  and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */ .close {
  position: absolute; right: 25px;
  top: 0;
  color: #000; font-size: 35px; font-weight: bold;
}
.close:hover, .close:focus {
  color: red;
  cursor: pointer;
}
/*/* Add Zoom Animation */ .animate {
  -webkit-animation: animatezoom 0.6s; animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom { from {-webkit-transform: scale(0)}
to {-webkit-transform: scale(1)} }
@keyframes animatezoom {
  from {transform: scale(0)}
  
  to {transform: scale(1)}
  /*}*/
  /* Change styles for span and cancel button on extra small screens */ 
  @media screen and (max-width: 300px) {
    span.psw { display: block;
     float: none;
   }
   .cancelbtn {
     width: 100%;
   }
 }
</style>
</head>
<body style="background-image: url({{asset('backend/img/l1.jpg')}});background-repeat: no-repeat; height: 50%;">
  <marquee><h2 class="mt-5 text-center" style="
  text-align: center;color: white;background-color:skyblue;">Contact Us</h2></marquee>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;border-radius: 25px; margin-top: 10%;">Contact Us</button>
  <div id="id01" class="modal">
    <form class="modal-content animate" action="#" method="post">
      <div class="imgcontainer"> <span
        onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="{{asset('backend/img/l5.png')}}" alt="Avatar" class="avatar"> </div>
        <div class="container">
          <label for="uname"><b>Name</b></label>
          <input type="text" placeholder="Enter Username" name="uname"
          required><br>
          <label for="psw"><b>Email</b></label>
          <input type="password" placeholder="Enter Email" name="psw" required><br>
          <label for="psw"><b>Message</b></label>
          <textarea></textarea><br>
          <button type="submit">Send</button>
        </div>
        <div class="container" style="background-color:#f1f1f1"> <button type="button"
          onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>

    </div>
    <script>

      var modal = document.getElementById('id01');

      if (event.target == modal) {
        modal.style.display = "none"; }
      </script>
    </body>
    </html>
    @endsection