<?php
    require 'functions.php';

session_start();
//cek cookie
  if (isset($_COOKIE['iduser'])&&isset($_COOKIE['username'])) 
  {
    $id=$_COOKIE['iduser'];
    $key=$_COOKIE['key'];

    //ambil username berdasar id
    $result = mysqli_query($conn,"SELECT username FROM admin WHERE iduser='$id'");
    $row=mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($key === hash('sha256',$row['username'])) 
    {
      $_SESSION['login']=true;
    } 
  }
  //tes
if(isset($_SESSION['login'])) 
{
  header("location:index.php");
  if($_COOKIE['login']==true) 
  {
    $_SESSION['login']=true;
  }
}

  if (isset($_SESSION['login']))
  {
    header('location:index.php');
    exit;
  }


if(isset($_POST["login"])) 
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

  if(mysqli_num_rows($result)===1) {
    $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row["password"])) {
      $_SESSION['login'] = true;

      if(isset($_POST['remember'])) 
      {
        setcookie('login', 'true', time()+60);
      }
      header("location:index.php");
      exit;
    }
  }
  $error = true;
}
  
  if (isset($error))
      {    
     echo 
      "
        <script>
          alert('wrong username or password');
          document.location.href='login.php';
        </script>
      ";
      }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lpion Admin</title>
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
                    <h1>Login</h1>
                  </div>
                  <p></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    
                  <form method="post" class="form-validate">
                    <div class="form-group">
                      <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                     <button class="btn btn-primary btn-block" type="submit" name="login">Login </button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.php" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Soyid</a></p>
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