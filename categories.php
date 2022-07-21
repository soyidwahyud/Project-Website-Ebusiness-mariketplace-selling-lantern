<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    

    <!-- Header Section Begin -->
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
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Lampion<span>.</span></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">

                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id = 8');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                            $obj = $result->fetch_object();
                            echo '<figure>';
                            echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                            echo '<div class="p-status">new</div>';
                            echo '<div class="hover-icon">';
                                echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                        echo 'alt=""></a>';
                            echo '</div>';
                        echo '</figure>';
                        echo '<div class="product-text">';
                            echo '<a href="#">';
                                echo '<h6>' .$obj->product_name.'</h6>';
                            echo '</a>';
                            echo '<p>'.$obj->qty.'</p>';
                            echo '<p>IDR '.$obj->price.'</p>';
                        echo '</div>';
                        }
                        $_SESSION['product_id'] = $product_id;
                        ?>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">

                            <?php
                                $i=0;
                                $product_id = array();
                                $product_quantity = array();
                                $result = $mysqli->query('SELECT * FROM products where id = 1');

                                if($result === FALSE){
                                die(mysqli_error());
                                }

                                if($result) {
                                    $obj = $result->fetch_object();
                                    echo '<figure>';
                                    echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                                    echo '<div class="p-status sale">sale</div>';
                                    echo '<div class="hover-icon">';
                                        echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                                echo 'alt=""></a>';
                                    echo '</div>';
                                echo '</figure>';
                                echo '<div class="product-text">';
                                    echo '<a href="#">';
                                        echo '<h6>' .$obj->product_name.'</h6>';
                                    echo '</a>';
                                    echo '<p>'.$obj->qty.'</p>';
                                    echo '<p>IDR '.$obj->price.'</p>';
                                echo '</div>';
                                }
                                $_SESSION['product_id'] = $product_id;
                            ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">

                            <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id = 2');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                            $obj = $result->fetch_object();
                            echo '<figure>';
                            echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                            echo '<div class="p-status">new</div>';
                            echo '<div class="hover-icon">';
                                echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                        echo 'alt=""></a>';
                            echo '</div>';
                        echo '</figure>';
                        echo '<div class="product-text">';
                            echo '<a href="#">';
                                echo '<h6>' .$obj->product_name.'</h6>';
                            echo '</a>';
                            echo '<p>'.$obj->qty.'</p>';
                            echo '<p>IDR '.$obj->price.'</p>';
                        echo '</div>';
                        }
                        $_SESSION['product_id'] = $product_id;
                        ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                            <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id = 3');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                            $obj = $result->fetch_object();
                            echo '<figure>';
                            echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                            echo '<div class="p-status">new</div>';
                            echo '<div class="hover-icon">';
                                echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                        echo 'alt=""></a>';
                            echo '</div>';
                        echo '</figure>';
                        echo '<div class="product-text">';
                            echo '<a href="#">';
                                echo '<h6>' .$obj->product_name.'</h6>';
                            echo '</a>';
                            echo '<p>'.$obj->qty.'</p>';
                            echo '<p>IDR '.$obj->price.'</p>';
                        echo '</div>';
                        }
                        $_SESSION['product_id'] = $product_id;
                        ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">

                            <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id = 4');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                            $obj = $result->fetch_object();
                            echo '<figure>';
                            echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                            echo '<div class="p-status">new</div>';
                            echo '<div class="hover-icon">';
                                echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                        echo 'alt=""></a>';
                            echo '</div>';
                        echo '</figure>';
                        echo '<div class="product-text">';
                            echo '<a href="#">';
                                echo '<h6>' .$obj->product_name.'</h6>';
                            echo '</a>';
                            echo '<p>'.$obj->qty.'</p>';
                            echo '<p>IDR '.$obj->price.'</p>';
                        echo '</div>';
                        }
                        $_SESSION['product_id'] = $product_id;
                        ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">

                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id = 5');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                            $obj = $result->fetch_object();
                            echo '<figure>';
                            echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                            echo '<div class="p-status">new</div>';
                            echo '<div class="hover-icon">';
                                echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                        echo 'alt=""></a>';
                            echo '</div>';
                        echo '</figure>';
                        echo '<div class="product-text">';
                            echo '<a href="#">';
                                echo '<h6>' .$obj->product_name.'</h6>';
                            echo '</a>';
                            echo '<p>'.$obj->qty.'</p>';
                            echo '<p>IDR '.$obj->price.'</p>';
                        echo '</div>';
                        }
                        $_SESSION['product_id'] = $product_id;
                        ?>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">

                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id = 6');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                            $obj = $result->fetch_object();
                            echo '<figure>';
                            echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                            echo '<div class="p-status">new</div>';
                            echo '<div class="hover-icon">';
                                echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                        echo 'alt=""></a>';
                            echo '</div>';
                        echo '</figure>';
                        echo '<div class="product-text">';
                            echo '<a href="#">';
                                echo '<h6>' .$obj->product_name.'</h6>';
                            echo '</a>';
                            echo '<p>'.$obj->qty.'</p>';
                            echo '<p>IDR '.$obj->price.'</p>';
                        echo '</div>';
                        }
                        $_SESSION['product_id'] = $product_id;
                        ?>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">

                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id = 7');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                            $obj = $result->fetch_object();
                            echo '<figure>';
                            echo '<img src="Admin/img/' .$obj->product_img_name.'" alt="">';
                            echo '<div class="p-status">new</div>';
                            echo '<div class="hover-icon">';
                                echo '<a href="Admin/img/' .$obj->product_img_name.'" class="pop-up"><img src="img/icons/zoom-plus.png"';
                                        echo 'alt=""></a>';
                            echo '</div>';
                        echo '</figure>';
                        echo '<div class="product-text">';
                            echo '<a href="#">';
                                echo '<h6>' .$obj->product_name.'</h6>';
                            echo '</a>';
                            echo '<p>'.$obj->qty.'</p>';
                            echo '<p>IDR '.$obj->price.'</p>';
                        echo '</div>';
                        }
                        $_SESSION['product_id'] = $product_id;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
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