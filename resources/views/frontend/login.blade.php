@extends('frontendtemplate')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  

  <title>Library Login</title>

  <!-- Custom fonts for this template-->
  <link href="backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="backend/css/sb-admin-2.css" rel="stylesheet">

</head>
<body>
  <div class="container log">
  <div class="row mt-5">

    <div class="col-md-6 offset-md-6">
      
      <div class="form-group box mt-5">
        <h2>Login</h2>
      <input type="email" name="email" placeholder="Email Address">
      
        <input type="password" name="password" placeholder="password">
      <button class="btn-outline-primary mt-3">&nbsp;&nbsp;Login &nbsp;&nbsp;</button>
      </div>
        
      


    </div>
  </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
@endsection