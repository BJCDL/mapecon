
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
        <div class="col-md-12 text-center">
            <h1>Having this on your home?</h1>
            <h5>With MAPECON your home is in control</h5>

            <img src="assets/img/1.jpg" width="170" height="120" alt="a"/>
            <img src="assets/img/2.jpg" width="170" height="120" alt="b"/>
            <img src="assets/img/3.jpg" width="170" height="120" alt="c"/>
            <img src="assets/img/4.jpg" width="170" height="120" alt="d"/>
            <img src="assets/img/5.png" width="170" height="120" alt="e"/>
            <img src="assets/img/6.png" width="170" height="120" alt="f"/>
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
      <div class="row" style="background-color: #e9ebee;">
        <div class="col-md-5" style="margin-top: 20px;">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cs8KOXvMhOg?autoplay=0" allowfullscreen=""> </iframe>
          </div>
        </div>
        <div class="col-md-7" style="margin-top: 20px; margin-bottom: 20px;">
        <form action="book.php" method="POST">
          <div class="row">
            <div class="col-md-12">
              <p class="pull-right" id="date_time" style="font-weight: 800"></p>
              <!-- <p class="lead">Property you' like us to visit for free: </p> -->
            </div>
            <div class="col-md-12">
              <h2 class="">Request for a free survey!</h2>
              <!-- <p class="lead">Note: This will depend on the degree of infestation and services will be rendered.</p> -->
            </div>
            <div class="col-md-6" style="margin-top: 10px;">
                <p style="font-weight: 800">ROUGH ESTIMATE</p>

            </div>
            <div class="col-md-6" style="margin-top: 10px;">
                <h1 style="font-weight: 800" class="pull-right" id="price" name="price">0.00</h1>
                <input class="form-control" type="text" name="price" id="price" placeholder="0.00" hidden>
            </div>
            <div class="col-md-12">
              <hr>
              <p style="font-weight: 800">Service</p>
              <select class="form-control" id="service" name="service">
                  <option>Bukbok Abatement Maintenance Program</option>
                  <option>Drilling</option>
                  <option>Fogging</option>
                  <option>Fugimation</option>
                  <option>Garden Spray</option>
                  <option>General Pest Abatement Maintenance Program</option>
                  <option>Mound Demolition</option>
                  <option>Rat Abatement Maintenance Program</option>
                  <option>Soil Treatment</option>
                  <option>Termite Abatement Maintenance Program</option>
                  <option>Wood Drenching</option>
              </select>
            </div>
            <div class="col-md-12">
              <hr>
              <p style="font-weight: 800">Area</p>
              <input class="form-control" type="text" name="area" placeholder="sqm." id="area" pattern="[0-9]+" required>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
              <p style="font-size: 15px;">Note: This will depend on the degree of infestation and services will be rendered.</p>

              <!-- <hr> -->
              <button type="submit" class="btn-find btn btn-primary xs-margintop-10 pull-right">
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
        <div class="col-md-12">
          <p class="lead text-center" style="font-size: 15px;">Copyright (c) 2018. All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
    var newDate = new Date().toLocaleString();
    $('#date_time').text(newDate);

    var t = setInterval(function(){ 
      var newDate = new Date().toLocaleString();
      $('#date_time').text(newDate);
    }, 1000);

    console.log(newDate);

  </script>
  <script src="assets/js/function.js"></script>
  <script type="text/javascript">
    $('#area').on('input',function(e){
        

        if($('#area').val() == '' || $('#area').val() == null) {
          $('#price').html('0.00');
        } else {
          var price = compute($('#service').val(), $('#area').val());

            $('#price').html(price.toLocaleString());
            $('input#price').val(price);
          // console.log($('#service').val() + ' ' +  $('#area').val());
        }
    });
  </script>
</body>

</html>