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
    <title>Webiste Lpion</title>

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

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Checkout<span>.</span></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form method="POST" action="orders-update.php" class="checkout-form">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Please fill the form</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Name*</p>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" placeholder="Full Name" name="nama">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Street Address*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="alamat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Kota</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="kota">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Post Code/ZIP*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="postcode">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Phone*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="notelp">
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-2">
                                    <p class="in-name">payment</p>
                                </div>
                                <div class="col-lg-2">
                                    <input type="radio" id="one" name="payment" value="Cash">
                                    <label for="one">Cash</label>
                                    <br>
                                    <input type="radio" id="two" name="payment" value="Debit">
                                    <label for="two">Debit</label>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="order-table">

                        <?php

                        if(isset($_SESSION['cart'])) {

                            $total = 0;
                            foreach($_SESSION['cart'] as $product_id => $quantity) {
                                $result = $mysqli->query("SELECT product_name, price, qty FROM products WHERE id = ".$product_id);
                                if($result){
                                    while($obj = $result->fetch_object()) {
                                      $cost = $obj->price * $quantity; //work out the line cost
                                      $total = $total + $cost; //add to the total cost

                                    echo'<div class="cart-item">';
                                    echo'<span>Product</span>';
                                    echo'<p class="product-name">'.$obj->product_name.'</p>';
                                    echo'</div>';
                                    echo '<div class="cart-item">';
                                    echo'<span>Price</span>';
                                    echo'<p>$ '.$obj->price.'</p>';
                                    echo '</div>';
                                    echo'<div class="cart-item">';
                                    echo'<span>Quantity</span>';
                                    echo'<p>'.$quantity.'</p>';
                                    echo'<div class="cart-total">';
                                    echo'<span>Total</span>';
                                    echo'<p>$ '.$total.'</p>';
                                    echo'</div>';
                                    }
                                }
                            }
                        }
                            else {
                                echo "<h3>No Shopping Cart<span>.</span></h3>";
                              } 
                          ?>

                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                                 
                            <button type="submit" value="Place your order">Place your order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About us</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Jobs</li>
                                <li>Shipping</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Customer Care</h4>
                            <ul>
                                <li>Search</li>
                                <li>Privacy Policy</li>
                                <li>2019 Lookbook</li>
                                <li>Shipping & Delivery</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                                <li>Free Shipping</li>
                                <li>Free Returnes</li>
                                <li>Our Franchising</li>
                                <li>Terms and conditions</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li>Payment methods</li>
                                <li>Times and shipping costs</li>
                                <li>Product Returns</li>
                                <li>Shipping methods</li>
                                <li>Conformity of the products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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