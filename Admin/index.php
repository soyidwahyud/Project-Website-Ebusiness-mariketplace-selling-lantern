<?php
 
session_start();

if (!isset($_SESSION["login"])) 
{
  echo $_SESSION["login"];
  header("Location:login.php");
  exit;
}
if(isset($_POST['logout.php']))
{
  session_start();
  session_destroy();
  session_unset();

  setcookie('login', 'false');

  header('location:login.php');
  exit;
}

require 'functions.php';


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
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Lpion</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">L</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>

            <!-- Log out -->
            <div class="list-inline-item logout"><form method="post" ><a href="logout.php" class="logout">Logout <i class="icon-logout"></i></a></form></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/user-512.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Admin</h1>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon icon-list"></i>
                    <span>Edit Table</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="Tabel_users.php">Tabel Users</a>
                    <a class="dropdown-item" href="Tabel_orders.php">Tabel Orders</a>
                    <a class="dropdown-item" href="Tabel_products.php">Tabel Products</a>
                    <a class="dropdown-item" href="Tabel_contact.php">Tabel Contact</a>
                    <a class="dropdown-item" href="Tabel_admin.php">Tabel Admin</a>
                  </div>
                </li>
        </ul> 
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong><a href="Tabel_users.php">Tables Users</a></strong>
                    </div>      
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong><a href="Tabel_orders.php">Tabel Orders</a></strong>
                    </div>      
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong><a href="Tabel_products.php">Tabel Products</a></strong>
                    </div>      
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong><a href="Tabel_contact.php">Tabel Contact</a></strong>
                    </div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </section>
        <div class="container-fluid">
            <div class="row">
          <div class="col-lg-4">
                <div class="bar-chart block no-margin-bottom">
                  <canvas id="barChartExample1"></canvas>
                </div>
                <div class="bar-chart block">
                  <canvas id="barChartExample2"></canvas>
                </div>
         </div>

        <div class="col-lg-8">
            <div class="line-cahrt block">
              <canvas id="lineCahrt"></canvas>
           </div>
        </div>
        </div>  
        </div>

<section class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
        <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">1st</div>
                  <div class="avatar"> <img src="img/soyid2.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Soyid Wahyu Darmawan</strong><span class="d-block">@soyidwahyud</span><span class="d-block">Programmer</span></a>
                </div>
                </div>
              </div>
        

      <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">2nd</div>
                  <div class="avatar"> <img src="img/dicka.png" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Achmad Handika</strong><span class="d-block">@achandika_</span><span class="d-block">Software Designer</span></a>
                </div>

              </div>
            </div>
          </div>
       </div>


      <div class="container-fluid">
        <div class="row">
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">3rd</div>
                  <div class="avatar"> <img src="img/abiyyu.png" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Alfarizqi Abiyyu</strong><span class="d-block">@Abiyyuoo</span><span class="d-block">Programmer</span></a>
                </div>

              </div>
            </div>

            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">4th</div>
                  <div class="avatar"> <img src="img/devany.png" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Devany Christabella</strong><span class="d-block">@devanydc</span><span class="d-block">Project Manager</span></a>
                </div>
              </div>
            </div>

            <div class="container-fluid">
        <div class="row">
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">5th</div>
                  <div class="avatar"> <img src="img/victor.png" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Victor Bayu</strong><span class="d-block">@christianbaretha</span><span class="d-block">Software Designer</span></a>
                </div>

              </div>
            </div>
    </div>
  </div>
</div>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2019 &copy; Lpion.inc.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>