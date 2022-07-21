<?php
	require 'functions.php';

	 $form = query("SELECT iduser, name, username, email FROM admin");

   //search
if(isset($_POST["cari"]))
{
  $form=cari4($_POST["keyword"]); 
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
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>

            <form id="searchForm" action="" method="post" class="cari4">
              <div class="form-group">
                <input type="text" name="keyword" placeholder="What are you searching for...">
                <button type="submit" class="submit" name="cari">Search</button>
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

            <!-- Log out               -->
            <div class="list-inline-item logout"><a id="logout" href="logout.php" class="nav-link">Logout <i class="icon-logout"></i></a></div>
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
                    <a class="dropdown-item" href="Tabel_features.php">Tabel features</a>
                    <a class="dropdown-item" href="Tabel_home.php">Tabel home</a>
                    <a class="dropdown-item" href="Tabel_gallery.php">Tabel gallery</a>
                    <a class="dropdown-item" href="Tabel_admin.php">Tabel Admin</a>
                    <a class="dropdown-item" href="Tabel_gallery.php">Tabel User</a>
                  </div>
                </li>
        </ul> 
      </nav>
      <!-- Sidebar Navigation end-->

		      <div class="page-content">
		        <div class="page-header">
		          <div class="container-fluid">
		            <h2 class="h5 no-margin-bottom">Tabel</h2>
						    <section class="no-padding-top">
							   <div class="container-fluid">
							       <div class="row">
							   		<div class="col-lg-6">
							        <div class="block margin-bottom-sm">
							          <div class="title"><strong>Tabel Form</strong></div>
							            <div class="table-responsive"> 
							                <table class="table">
							                 <thead>
							                    <tr>
							                        <th>No</th>
							                        <th>Name</th>
                                                    <th>username</th>
							                        <th>Email</th>
                                                    <th class="aksi"> action</th> 
                                                    						                      
							                    </tr>
							                </thead>
							                <tbody>
							                	<?php foreach($form as $row){ ?>
						                        <tr>
						                          
						                          <td><?php echo $row['iduser']; ?></td>
						                          <td><?php echo $row['name']; ?></td>
						                          <td><?php echo $row['username']; ?></td>
                                                  <td><?php echo $row['email']; ?></td>
                                                  <td>
                                      <a href="hapus_Admin.php?admin=<?php echo $row["iduser"]; ?>"onclick="return confirm('Are you sure?')" class="aksi">Delete</a>
                                    </td>
                                    
                                      
						                        </tr>
						                        <?php }?>
					                    	</tbody>
						                	</table>
						            	</div>
						        	</div>
						    	</div>
							</div>
							</div>
							</section>
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