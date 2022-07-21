<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lpion</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.php"><img src="img/logo2.png" alt=""></a>
                </div>
                <div class="user-access">
                <?php
                    if(isset($_SESSION['username'])){
                        echo '<a href="account.php">My Account /</a>';
                        echo '<a href="logout.php">Log Out</a>';
                    }
                    else{
                        echo '<a href="login.php" class="in">Sign in /</a>';
                        
                        echo '<a href="register.php">Register</a>';
                    }
                ?>
                </div>
                    
                
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./categories.php">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shopping-cart.php">Shopping Card</a></li>
                                <li><a href="check-out.php">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href="./orders.php">My Orders</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over IDR 30000 in Indonesia</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>30% off on lamp. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h3>Your Orders<span>.</span></h3>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
            <?php
              $user = $_SESSION["username"];
              $result = $mysqli->query("SELECT * from orders where email='".$user."'");
              

                $total = 0;
                echo '<table>';
                echo '<thead>';
                echo '<tr>';
                echo '<th class="product-h">Product</th>';
                echo '<th>Price</th>';
                echo '<th>Date</th>';
                echo '<th>Unit</th>';
                echo '<th>Total</th>';
                echo '<th></th>';
                echo '</tr>';
                echo '</thead>';
                
                if($result){
                    while($obj = $result->fetch_object()) {
                      echo '<tbody>';
                      echo '<tr>';
                      echo '<td class="product-col">';
                      echo '<h5>'.$obj->id.'</h5>';
                      echo '<h5>'.$obj->product_code.'</h5>';    
                      echo '<div class="p-title">';
                      echo '<h5>'.$obj->product_name.'</h5>';
                      echo '</div>';
                      

                      
                      echo '<td class="price-col">IDR'.$obj->price.'</td>';
                      echo '<td class="price-col">IDR'.$obj->date.'</td>';
                      echo '<td class="price-col">'.$obj->units.'</td>';
                      echo '</td>';
                      echo '<td class="total">IDR '.$obj->total.'</td>';
                      
                    }
                  
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
              }
              ?>
              </div>
            </div>
        </div>
    <br>
    <!-- Cart Page Section End -->

  
     <!-- Latest Product End -->
     <div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>

<div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Soyid</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>


		</div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>