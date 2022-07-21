<?php
error_reporting(0);
  require 'functions.php';
  $id=$_GET["products"];

  $products=query("SELECT * FROM products WHERE id=$id");
  //var_dump($mhs);
  //cek apakah button submit sudah ditekan atau belum
  if (isset($_POST['submit'])) {
    //cek sukses data ditambah menggunakan function tambah pada functions.php
    $id=$_POST["id"];
    if (editProducts($_POST) > 0) {
      echo "
      <script>
        alert('data saved');
        document.location.href='Tabel_products.php';
      </script>

      ";
    }
    else{
      echo "
      <script>
        alert('data unsaved');
        document.location.href='Tabel_products.php';
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
    <title>Edit Tabel Products</title>
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
                    <h1>Edit Products</h1>
                  </div>
                  <p></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form  action="" method="post"  enctype="multipart/form-data" class="text-left form-validate">

                  <div class="form-group-material">
                      <input type="text" name="product_code" id="product_code" value="<?=$products[0]['product_code']?>" class="input-material">
                      <input type="hidden" name="id" id="id" value="<?=$products[0]['id']?>"class="input-material"> 
                      <label for="product_code" class="label-material">Product Code</label>
                    </div>

                    
                  <div class="form-group-material">
                      <input type="text" name="product_name" id="product_name" value="<?=$products[0]['product_name']?>" class="input-material">
                      <input type="hidden" name="id" id="id" value="<?=$products[0]['id']?>"class="input-material"> 
                      <label for="product_name" class="label-material">Product Name</label>
                    </div>

                    <div class="form-group-material">
                      <input type="file" name="product_img_name"id="product_img_name"  class="input-material">
                      <input type="hidden" name="oldimage" id="oldimage" value="<?=$products[0]['product_img_name']?>"class="input-material">
                      <label for="product_img_name" class="label-material">Product Image Name</label>
                    </div>

                    
                  <div class="form-group-material">
                      <input type="text" name="qty" id="qty" value="<?=$products[0]['qty']?>" class="input-material">
                      <input type="hidden" name="id" id="id" value="<?=$products[0]['id']?>"class="input-material"> 
                      <label for="qty" class="label-material">Quantity</label>
                    </div>

                    <div class="form-group-material">
                      <input type="text" name="price" id="price" value="<?=$products[0]['price']?>" class="input-material">
                      <input type="hidden" name="id" id="id" value="<?=$products[0]['id']?>"class="input-material"> 
                      <label for="price" class="label-material">Price</label>
                    </div>

                    <button class="btn btn-primary btn-block" type="submit" name="submit">Edit </button>
                  </form>
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
