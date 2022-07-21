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
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="img/slider-4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lampion.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-5.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lampion.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-6.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lampion.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="img/icons/f-delivery.png" alt="">
                            <h4>Free shipping</h4>
                            <p>free shipping every place in indonesia, c'mon use green technology to save our beloved earth </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/icons/coin.png" alt="">
                            <h4>100% Money back </h4>
                            <p>one hundred percent money back if this tools broken and trouble</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p>alway support customer every day just call our customer service. your problem solved </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="img/f-box-6.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="img/f-box-5.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item second-box">
                            <img src="img/f-box-4.jpg" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".dresses">Kardus bekas dan Stik Es krim bekas</li>
                            <li data-filter=".bags">Gelas Bekas dan Sendok Plastik Bekas</li>
                            <li data-filter=".shoes">Spesial</li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" id="product-list">
                <div class="col-lg-3 col-sm-6 mix all dresses ">    
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
                          echo '<div class="product-text">';
                          echo '<a href=""><img src="Admin/img/' .$obj->product_img_name.'" alt=""></a>';
                          echo '<h5>' .$obj->product_name.'</h5>';
                          echo '<h6>' .$obj->product_code.'</h6>';
                          echo '<p>IDR ' .$obj->price.'</p>';
                          echo '<p> ' .$obj->qty.'</p>';

                          if($obj->qty > 0){
                            echo '<a href="update-cart.php?action=add&id='.$obj->id.'" ><input type="submit" value="Add To Cart" class="primary-btn look-btn"style ="clear:both; background: #B0BCC2; border: none; color: #fff; font-size: 1em; padding: 20px;" ></a>';
                          }
                          else {
                            echo 'Out Of Stock!';
                          }
                          echo '</div>';
                          $i++;
                    }
                    $_SESSION['product_id'] = $product_id;
                    ?>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mix all dresses">    
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
                          echo '<div class="product-text">';
                          echo '<a href=""><img src="Admin/img/' .$obj->product_img_name.'" alt=""></a>';
                          echo '<h5>' .$obj->product_name.'</h5>';
                          echo '<h6>' .$obj->product_code.'</h6>';
                          echo '<p>IDR ' .$obj->price.'</p>';
                          echo '<p> ' .$obj->qty.'</p>';

                          if($obj->qty > 0){
                            echo '<a href="update-cart.php?action=add&id='.$obj->id.'" ><input type="submit" value="Add To Cart" class="primary-btn look-btn"style ="clear:both; background: #B0BCC2; border: none; color: #fff; font-size: 1em; padding: 20px;" ></a>';
                          }
                          else {
                            echo 'Out Of Stock!';
                          }
                          echo '</div>';
                          
                    }
                    $_SESSION['product_id'] = $product_id;
                    ?>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mix all dresses ">    
                <div class="single-product-item">
                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id =3');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                           
                           $obj = $result->fetch_object();      
                          echo '<div class="product-text">';
                          echo '<a href=""><img src="Admin/img/' .$obj->product_img_name.'" alt=""></a>';
                          echo '<h5>' .$obj->product_name.'</h5>';
                          echo '<h6>' .$obj->product_code.'</h6>';
                          echo '<p>IDR ' .$obj->price.'</p>';
                          echo '<p> ' .$obj->qty.'</p>';

                          if($obj->qty > 0){
                            echo '<a href="update-cart.php?action=add&id='.$obj->id.'" ><input type="submit" value="Add To Cart" class="primary-btn look-btn"style ="clear:both; background: #B0BCC2; border: none; color: #fff; font-size: 1em; padding: 20px;" ></a>';
                          }
                          else {
                            echo 'Out Of Stock!';
                          }
                          echo '</div>';
                          
                    }
                    $_SESSION['product_id'] = $product_id;
                    ?>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mix all bags ">    
                <div class="single-product-item">
                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id =4');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                           
                           $obj = $result->fetch_object();      
                          echo '<div class="product-text">';
                          echo '<a href=""><img src="Admin/img/' .$obj->product_img_name.'" alt=""></a>';
                          echo '<h5>' .$obj->product_name.'</h5>';
                          echo '<h6>' .$obj->product_code.'</h6>';
                          echo '<p>IDR ' .$obj->price.'</p>';
                          echo '<p> ' .$obj->qty.'</p>';

                          if($obj->qty > 0){
                            echo '<a href="update-cart.php?action=add&id='.$obj->id.'" ><input type="submit" value="Add To Cart" class="primary-btn look-btn"style ="clear:both; background: #B0BCC2; border: none; color: #fff; font-size: 1em; padding: 20px;" ></a>';
                          }
                          else {
                            echo 'Out Of Stock!';
                          }
                          echo '</div>';
                          
                    }
                    $_SESSION['product_id'] = $product_id;
                    ?>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mix all bags">    
                <div class="single-product-item">
                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id =5');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                           
                           $obj = $result->fetch_object();      
                          echo '<div class="product-text">';
                          echo '<a href=""><img src="Admin/img/' .$obj->product_img_name.'" alt=""></a>';
                          echo '<h5>' .$obj->product_name.'</h5>';
                          echo '<h6>' .$obj->product_code.'</h6>';
                          echo '<p>IDR ' .$obj->price.'</p>';
                          echo '<p> ' .$obj->qty.'</p>';

                          if($obj->qty > 0){
                            echo '<a href="update-cart.php?action=add&id='.$obj->id.'" ><input type="submit" value="Add To Cart" class="primary-btn look-btn"style ="clear:both; background: #B0BCC2; border: none; color: #fff; font-size: 1em; padding: 20px;" ></a>';
                          }
                          else {
                            echo 'Out Of Stock!';
                          }
                          echo '</div>';
                          
                    }
                    $_SESSION['product_id'] = $product_id;
                    ?>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mix all shoes">    
                <div class="single-product-item">
                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id =6');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                           
                           $obj = $result->fetch_object();      
                          echo '<div class="product-text">';
                          echo '<a href=""><img src="Admin/img/' .$obj->product_img_name.'" alt=""></a>';
                          echo '<h5>' .$obj->product_name.'</h5>';
                          echo '<h6>' .$obj->product_code.'</h6>';
                          echo '<p>IDR ' .$obj->price.'</p>';
                          echo '<p> ' .$obj->qty.'</p>';

                          if($obj->qty > 0){
                            echo '<a href="update-cart.php?action=add&id='.$obj->id.'" ><input type="submit" value="Add To Cart" class="primary-btn look-btn"style ="clear:both; background: #B0BCC2; border: none; color: #fff; font-size: 1em; padding: 20px;" ></a>';
                          }
                          else {
                            echo 'Out Of Stock!';
                          }
                          echo '</div>';
                          
                    }
                    $_SESSION['product_id'] = $product_id;
                    ?>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mix all shoes ">    
                <div class="single-product-item">
                    <?php
                        $i=0;
                        $product_id = array();
                        $product_quantity = array();
                        $result = $mysqli->query('SELECT * FROM products where id =7');

                        if($result === FALSE){
                          die(mysqli_error());
                        }

                        if($result) {
                           
                           $obj = $result->fetch_object();      
                          echo '<div class="product-text">';
                          echo '<a href=""><img src="Admin/img/' .$obj->product_img_name.'" alt=""></a>';
                          echo '<h5>' .$obj->product_name.'</h5>';
                          echo '<h6>' .$obj->product_code.'</h6>';
                          echo '<p>IDR ' .$obj->price.'</p>';
                          echo '<p> ' .$obj->qty.'</p>';

                          if($obj->qty > 0){
                            echo '<a href="update-cart.php?action=add&id='.$obj->id.'" ><input type="submit" value="Add To Cart" class="primary-btn look-btn"style ="clear:both; background: #B0BCC2; border: none; color: #fff; font-size: 1em; padding: 20px;" ></a>';
                          }
                          else {
                            echo 'Out Of Stock!';
                          }
                          echo '</div>';
                          
                    }
                    $_SESSION['product_id'] = $product_id;
                    ?>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Latest Product End -->
        <div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
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