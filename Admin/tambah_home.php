<?php
	require 'functions.php';

	if (isset($_POST['submit'])) 
	{
		//cek isi dari post 
		//var_dump($_POST);
		//var_dump($_FILES);
		//die();
		//cek sukses data ditambah menggunakan function tambah pada functions.php
		if (tambah2($_POST) > 0) 
		{
			echo "
			<script>
				alert('data saved');
				document.location.href='Tabel_home.php';
			</script>

			";
		}
		else
		{
			echo "
			<script>
				alert('data invalid');
				document.location.href='tambah_home.php';
			</script>";
			echo "<br>";
			echo mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Tabel Home</title>
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
                    <img src="9950bfe63916da358d6be09feae80071.png">
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left form-validate" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group-material">
                      <input id="title_beranda" type="text" name="title_beranda"class="input-material">
                      <label for="title_beranda" class="label-material">Title Home</label>
                    </div>
                    <div class="form-group-material">
                      <input id="berandaa" type="text" name="berandaa" class="input-material">
                      <label for="berandaa" class="label-material">Description</label>
                    </div>
                    
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Add </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p class="no-margin-bottom">2018 &copy; Razer.inc.</p>
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
