<?php
    require 'functions.php';

  if (isset($_POST['register'])) 
  {
    echo 
      "
        <script>
          alert('are you sure?');
        </script>
      ";
    if (register($_POST)>0) 
    {
      echo 
      "
        <script>
          alert('register successfully');
          document.location.href='login.php';
        </script>
      ";
    }
    else
    {
      echo 
      "
        <script>
          alert('register invalid');
          document.location.href='register.php';
        </script>
      ";
      echo mysqli_error($conn);
    }
  }   
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Lpion Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Register</h1>
                  </div>
                  <p></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left form-validate" action="" method="POST">
                    <div class="form-group-material">
                      <input id="name" type="text" name="name" required data-msg="Please enter your name" class="input-material">
                      <label for="name" class="label-material">name</label>
                    </div>
                    <div class="form-group-material">
                      <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="username" class="label-material">Username</label>
                    </div>
                    <div class="form-group-material">
                      <input id="email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="email" class="label-material">Email Address      </label>
                    </div>
                    <div class="form-group-material">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password        </label>
                    </div>
                    <div class="form-group-material">
                      <input id="password" type="password" name="password2" required data-msg="Confirm your password" class="input-material">
                      <label for="password2" class="label-material">Confirm Password        </label>
                    </div>
                    <div class="form-group terms-conditions text-center">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">I agree with the terms and policy</label>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="register">Register </button>
                  </form><small>Already have an account? </small><a href="login.php" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p class="no-margin-bottom">2019 &copy; Lpion.inc.</p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>