<?php
include("includes/config.php");
include("includes/functions.php");

if (isset($_POST['login'])) {
  $alert = login($con, $_POST['username'], $_POST['password']);
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/theme.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jquery-confirm.css" type="text/css">
  <title>MAPECON Intelligent Servicing System</title>
  <style type="text/css">
    /** {
      font-family: 'Segoe UI', sans-serif !important;
    }*/

    a,
    a:active,
    a:focus {
      outline: none;
    }

    form {
      border: 1px solid #dddfe2;
      padding: 40px;
      background-color: #ffffff;
    }

    form a {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 20px !important;
      font-weight: 800 !important;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-weight: 800;">MAPECON Intelligent Servicing System
        <br> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item text-light">
            <a class="nav-link" href="index.php"><i class="fa d-inline fa-lg"></i> Home
              <br> </a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link" href="services.php"><i class="fa d-inline fa-lg"></i> Services
              <br> </a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link" href="about-us.php"><i class="fa d-inline fa-lg"></i> About Us
              <br> </a>
          </li>
          <!-- <li class="nav-item text-light">
            <a class="nav-link" href="contact-us.php"><i class="fa d-inline fa-lg"></i> Contacts Us
              <br> </a>
          </li> -->
        </ul>
        <a class="btn navbar-btn ml-2 text-white btn-warning" href="sign-in.php"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
      </div>
    </div>
  </nav>
  <!-- <div class="py-5 text-center filter-dark" style="background-image: url('https://picsum.photos/1200/675?image=1050');background-size:cover;background-position:center center;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1">Mapecon</h1>
        </div>
      </div>
    </div>
  </div> -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid d-block" src="assets/img/logo.jpg">
        </div>
        <div class="col-md-6">
          <form method="post">
            <!-- <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
              <p class="mb-0">Invalid username or password!</p>
            </div> -->
            <div class="form-group">
              <h4>Intelligent Servicing System </h4>
              </div>
            <div class="form-group"> <label>Username</label>
              <input type="text" class="form-control" placeholder="Username" id="username" name="username" required> 
              <!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small>  -->
              </div>
            <div class="form-group"> <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" id="password" name="password" required> </div>
              <button type="submit" name="login" class="btn btn-primary loginAccount">Sign In</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img class="img-fluid d-block" src="assets/img/mascot.png" style=""> </div>
        <div class="col-md-10">
          <!-- <h1 class="display-1">Mapecon</h1> -->
          <p class="lead">"MAPECON offers the best environment-friendly solutions for your pest problems. You can trust MAPECON's practice of Christian principles and ethics in business, 56 years of experience, 38 award-winning patents, and 100% indigenous Filipino products
            to help make your environment pest free. Our 44 branches are here to serve you nationwide." </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead text-center" style="font-size: 15px;">Copyright (c) 2018. All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-latest.min.js" type="text/javascript"></script>
  <script src="assets/js/jquery-confirm.js" type="text/javascript"></script>
  <script src="assets/js/function.js"></script>
  <?php if (isset($alert)) echo $alert; ?>
</body>
  
</html>