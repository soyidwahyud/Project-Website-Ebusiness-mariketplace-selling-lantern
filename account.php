<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

//if($_SESSION["type"]==="admin") {
//  header("location:admin.php");
//}

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
    <title>Website Lpion</title>

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
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                      <p><?php echo '<h3>Hi ' .$_SESSION['fname'] .'</h3>'; ?></p>
                      <h4>Account Details</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->
    <section class="cart-total-page spad">
        <div class="container">
            <form method="POST" action="update.php" class="checkout-form">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Name</p>
                            </div>
                            <div class="col-lg-5">
                            <?php
                              $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                                if($result === FALSE){
                                  die(mysql_error());
                                }
                                if($result) {
                                  $obj = $result->fetch_object();

                                echo '<input type="text" name="fname" placeholder="'. $obj->fname. '">';
                                echo '</div>';
                                echo '<div class="col-lg-5">';
                                echo '<input type="text" placeholder="'. $obj->lname.'" name="lname">';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<div class="col-lg-2">';
                                echo '<p class="in-name">Street Address</p>';
                                echo '</div>';
                                echo '<div class="col-lg-10">';
                                echo '<input type="text" placeholder="' . $obj->address.'" name="address">';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<div class="col-lg-2">';
                                echo '<p class="in-name">City</p>';
                                echo '</div>';
                                echo '<div class="col-lg-10">';
                                echo '<input type="text" placeholder="' . $obj->city. '" name="city">';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<div class="col-lg-2">';
                                echo '<p class="in-name">Post Code/ZIP*</p>';
                                echo '</div>';
                                echo '<div class="col-lg-10">';
                                echo '<input type="text" name="pin" placeholder="' . $obj->pin.'">';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<div class="col-lg-2">';
                                echo '<p class="in-name">Email</p>';
                                echo '</div>';
                                echo '<div class="col-lg-10">';
                                echo '<input type="email" name="email" placeholder ="' . $obj->email.'">';
                                echo '</div>';
                                echo '</div>';
                                }
                                echo '<div class="row">';
                                echo '<div class="col-lg-2">';
                                echo '<p class="in-name">Password</p>';
                                echo '</div>';
                                echo '<div class="col-lg-10">';
                                echo '<input type="password" name="pwd">';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                ?>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                            <button type="submit" value="update">update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
     <!-- Cart Total Page End -->

<div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Soyid</a>
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