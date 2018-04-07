<?php
    session_start();
    if(isset($_POST['area']) && isset($_POST['price']) && isset($_POST['service'])) {
         // echo '<script>window.location.assign("index.php");</script>';
        $_SESSION['area'] = $_POST['area'];
        $_SESSION['price'] = $_POST['price'];
        $_SESSION['service'] = $_POST['service'];
    } 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/theme.css" type="text/css">
  <title>MAPECON Intelligent Servicing System</title>
  <link href="assets/css/jquery-confirm.css" rel="stylesheet" />
  <style type="text/css">
    /** {
      font-family: 'Segoe UI', sans-serif !important;
    }*/

    a, a:active, a:focus {
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
      <a class="navbar-brand" href="#"  style="font-weight: 800;">MAPECON Intelligent Servicing System
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
  <div class="py-5">
    <div class="container">
      <div class="row" style="background-color: #e9ebee;">
        <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px;">
        <form id="book" action="book-summary.php" method="POST">
          <div class="row">
            <div class="col-md-12">
              <h2 class="">Please complete the forms below.</h2>
              <!-- <p class="lead">Property you' like us to visit for free: </p> -->
            </div>
            <div class="col-md-12">
              

                <div class="container-fluid">
                  <h4 class="heading_a">
                  <span style="font-weight: bold;" class="heading_text">Personal Details</span></h3>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label> LAST NAME</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label> FIRST NAME</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label> MIDDLE NAME</label>
                        <input type="text" class="form-control" id="middlename" name="middlename"  required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <h4 class="heading_a"><span style="font-weight: bold;" class="heading_text">Address</span></h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label> ADDRESS</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                <h4 class="heading_a"><span style="font-weight: bold;" class="heading_text">Contact Details</span></h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email"> E-MAIL</label>
                      <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="mobileNum"> CELLPHONE NUMBER</label>
                      <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="e.g. 09959242478"  required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="homeNum"> HOME NUMBER</label>
                      <input type="text" class="form-control" id="home_number" name="home_number"  required>
                    </div>
                  </div>
                </div>



            </div>
            <div class="col-md-12" style="margin-top: 20px;">
              <!-- <hr> -->
              <button type="submit" class="btn-find btn btn-primary xs-margintop-10 pull-right bookSummary">
                  <span class="icon-thin-arrow-right icon-white pull-right"></span>
                  <strong>CONTINUE</strong>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"></div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img class="img-fluid d-block" src="assets/img/mascot.png" style="">
        </div>
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
  <script src="assets/js/jquery-confirm.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
        $("input#lastname").attr('maxlength','15');
        $("input#firstname").attr('maxlength','15');
        $("input#middlename").attr('maxlength','15');
        $("input#address").attr('maxlength','50');
        $("input#email").attr('maxlength','50');
        $("input#home_number").attr('maxlength','11');
    });
  </script>
</body>

</html>