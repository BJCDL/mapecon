<?php
    session_start();
    if(isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname'])) {
         
        // $_SESSION['area'] = $_POST['area'];
        // $_SESSION['price'] = $_POST['price'];
    } else {
      echo '<script>window.location.assign("index.php");</script>';
    }
?>
<?php
    // session_start();
    // if(
    //     isset($_POST['lastname']) && 
    //     isset($_POST['firstname']) && 
    //     isset($_POST['middlename']) && 
    //     isset($_POST['address']) && 
    //     isset($_POST['email']) && 
    //     isset($_POST['mobile_number']) && 
    //     isset($_POST['home_number'])
    //   ) {
    //      // echo '<script>window.location.assign("index.php");</script>';
    //     // $_SESSION['lastname'] = $_POST['lastname'];
    //     // $_SESSION['firstname'] = $_POST['firstname'];
    //     // $_SESSION['middlename'] = $_POST['middlename'];
    //     // $_SESSION['address'] = $_POST['address'];
    //     // $_SESSION['email'] = $_POST['email'];
    //     // $_SESSION['mobile_number'] = $_POST['mobile_number'];
    //     // $_SESSION['home_number'] = $_POST['home_number'];
    // } 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/theme.css" type="text/css">
  <title>MAPECON Intelligent Servicing System</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/lib/gridforms/gf-forms.min.css" type="text/css">
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
          <form class="gf" method="post" action="book-success.php">
              <div class="col-md-12">
                <h2 class="">Booking Summary</h2>
                <!-- <p class="lead">Property you' like us to visit for free: </p> -->
              </div>
              <div class="col-md-12" style="margin-top: 20px;">
                <fieldset>
                  <legend>Personal Details</legend>
                  <div class="gf-row-7 gf-large">
                      <!-- <div class="gf-col-1">
                          <label>Title</label>

                          Mr.
                      </div> -->
                      <div class="gf-col-2">
                          <label>First Name</label>
                          <span id="firstname"><?php echo $_POST['firstname']; ?></span>
                          <input type="hidden" name="fname" value="<?php echo $_POST['firstname']; ?>">
                      </div>
                      <div class="gf-col-2">
                          <label>Middle Name</label>
                          <span id="middlename"><?php echo $_POST['middlename']; ?></span>
                          <input type="hidden" name="mname" value="<?php echo $_POST['middlename']; ?>">
                      </div>
                      <div class="gf-col-2">
                          <label>Last Name</label>
                          <span id="lastname"><?php echo $_POST['lastname']; ?></span>
                          <input type="hidden" name="lname" value="<?php echo $_POST['lastname']; ?>">
                      </div>
                  </div>
              </fieldset>
              <fieldset style="margin-top: 20px;">
                  <legend>Residential Address</legend>
                  <div class="gf-row-1 gf-large">
                      <div class="gf-col-1">
                          <label>Address</label>
                          <span id="address"><?php echo $_POST['address']; ?></span>
                          <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
                      </div>
                  </div>
              </fieldset>
              <fieldset style="margin-top: 20px;">
                  <legend>Contact Details</legend>
                  <div class="gf-row-3 gf-large">
                      <div class="gf-col-1">
                          <label>E-mail</label>
                          <span id="email"><?php echo $_POST['email']; ?></span>
                          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                      </div>
                      <div class="gf-col-1">
                          <label>Cellphone Number</label>
                          <span id="mobile_number"><?php echo $_POST['mobile_number']; ?></span>
                          <input type="hidden" name="cellphonenumber" value="<?php echo $_POST['mobile_number']; ?>">
                      </div>
                      <div class="gf-col-1">
                          <label>Home Number</label>
                          <span id="home_number"><?php echo $_POST['home_number']; ?></span>
                          <input type="hidden" name="home_number" value="<?php echo $_POST['home_number']; ?>">
                      </div>
                  </div>
                 <!--  <div class="gf-row-2 gf-large">
                      <div class="gf-col-1" data-field-error="Please enter a valid email address">
                          <label>E-mail</label>
                          <input type="text" ng-disabled="true" ng-model="teacher.email">
                      </div>
                  </div> -->
              </fieldset>
              <fieldset style="margin-top: 20px;">
                  <legend>MAPECON Service</legend>
                  <div class="gf-row-1 gf-large">
                      <div class="gf-col-1">
                          <label>SERVICE</label>
                          <h2 style="font-weight: 800" id="service"><?php echo $_SESSION['service']; ?></h2>
                          <input type="hidden" name="service" value="<?php echo $_SESSION['service']; ?>">
                      </div>
                  </div>
                  <div class="gf-row-2 gf-large">
                      <div class="gf-col-1">
                          <label>SQUARE METER</label>
                          <h1 style="font-weight: 800" id="area"><?php echo number_format($_SESSION['area']); ?> sqm.</h1>
                          <input type="hidden" name="area" value="<?php echo $_SESSION['area']; ?>">
                      </div>
                      <!-- <div class="gf-col-1">
                          <h5>GRAND TOTAL</h5>
                      </div> -->
                      <div class="gf-col-1">
                          <label>GRAND TOTAL</label>
                          <h1 style="font-weight: 800" id="price">PHP <?php echo  number_format($_SESSION['price']); ?></h1>
                          <input type="hidden" name="price" value="<?php echo $_SESSION['price']; ?>">
                      </div>
                  </div>
                 <!--  <div class="gf-row-2 gf-large">
                      <div class="gf-col-1" data-field-error="Please enter a valid email address">
                          <label>E-mail</label>
                          <input type="text" ng-disabled="true" ng-model="teacher.email">
                      </div>
                  </div> -->
              </fieldset>
              <br>
              <small><b>Note:</b> please double check all the informations before hitting "BOOK NOW"</small>
              </div>

              
          
              <div class="col-md-12" style="margin-top: 20px;">
                <!-- <hr> -->
                <button type="submit" name="booknow" class="btn-find btn btn-primary xs-margintop-10 pull-right bookNow">
                    <span class="icon-thin-arrow-right icon-white pull-right"></span>
                    <strong>BOOK NOW</strong>
                </button>
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
  <script src="assets/lib/jquery-listnav/dist/js/jquery-listnav-2.4.0.min.js"></script>
  <script src="assets/lib/gridforms/gf-forms.min.js"></script>
  <script src="assets/js/function.js"></script>
</body>

</html>