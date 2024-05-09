<!-- php -->
<?php
   require_once ('../phpConnect/connectData.php');

   $sql = "SELECT * from products";
   $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"

      href="/css/app-wa-8d95b745961f6b33ab3aa1b98a45291a.css?vsn=d"
    >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css"
      >

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Miniature World</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo01.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/slide.css">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
							<option>¥ JPY</option>
							<option>$ USD</option>
							<option>€ EUR</option>
						</select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="tel:028 3775 5052"> 028 3775 5052</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color fa-beat"></i> My Account</a></li>
                            <!-- <li><a href=""><i class="fas fa-location-arrow"></i> Our location</a></li> -->
                            <li><a href="contact-us.php"><i class="fas fa-headset fa-beat"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					 <div class="login-box selectpicker show-tick form-control " >
						<!-- <select id="basic" class="selectpicker show-tick form-control" data-pollacehder="Sign In">
							<option value="1">Register Here</option>
							<option value="2" data-url="signin.html">Sign In</option>
						</select>
					</div>  -->
                        <i class="fa-duotone fa-right-to-bracket fa-fade"></i>
                        <a href="signin.php" class="btn2 btn-primary2 mt-1"><b>Logout</b></a>
                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Teddy Bear
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Miniature World shop
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Miniature World shop
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Lego
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo01.png" class="logo" alt="logo"><b>Miniature World</b></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link " href="about.html">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.php">Sidebar Shop</a></li>
								<!-- <li><a href="shop-detail.html">Shop Detail</a></li> -->
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <!-- <li><a href="my-account.html">My Account</a></li> -->
                                <li><a href="wishlist.php">Wishlist</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
                        <li class="side-menu">
							<a href="cart.html">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
								<p>My Cart</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/toypos1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Miniature World</strong></h1>
                            <p class="m-b-40">Miniature World isn't just a place filled with shelves and aisles, <br>it's a portal to endless adventures, <br>a land where creativity blossoms, <br>and a universe where laughter echoes. </p>
                            <p><b><a class="btn hvr-hover" href="#">Shop New</a></b></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/toypos2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Miniature World</strong></h1>
                            <p class="m-b-40">Miniature World isn't just a place filled with shelves and aisles, <br>it's a portal to endless adventures, <br>a land where creativity blossoms, <br>and a universe where laughter echoes. </p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/toypos3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Miniature World</strong></h1>
                            <p class="m-b-40">Miniature World isn't just a place filled with shelves and aisles, <br>it's a portal to endless adventures, <br>a land where creativity blossoms, <br>and a universe where laughter echoes. </p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid1" src="images/baby.jpg" alt="" />
                        <a class="btn1 hvr-hover poster" href="shop.html">Under 1 year old</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid1" src="images/girl1-3.jpg" alt="" />
                        <a class="btn1 hvr-hover poster1" href="shop.html">1 to 3 years old</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid1" src="images/girl3+.jpg" alt="" />
                        <a class="btn1 hvr-hover poster2" href="shop.html">Over 3 years old</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<!-- <div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluidBox" src="images/add-img-01.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluidBox" src="images/add-img-02.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div> -->
    <!-- <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img class="insta" src="images/collective.jpg" alt="" />
                    <div class="hov-in">
                        <a href="shop.html"><p class="fontInsta">Collectible toys</p></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img class="insta" src="images/doll.jpg" alt="" />
                    <div class="hov-in">
                        <a href="shop.html"><p class="fontInsta">Doll</p></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img class="insta" src="images/lego.jpg" alt="" />
                    <div class="hov-in">
                        <a href="shop.html"><p class="fontInsta">Lego</p></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img class="insta" src="images/vehicle.jpg" alt="" />
                    <div class="hov-in">
                        <a href="shop.html"><p class="fontInsta">Vehicle toys</p></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img class="insta" src="images/teddyBear.jpg" alt="" />
                    <div class="hov-in">
                        <a href="shop.html"><p class="fontInsta">Teddy bear</p></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img class="insta" src="images/robot.jpg" alt="" />
                    <div class="hov-in">
                        <a href="shop.html"><p class="fontInsta">Robot</p></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    </div> -->
    
<div clas="slide01">
   <div class="title-all text-center">
       <h1 class="headcomment">Type of toy </h1>
    </div>

    <section class="swiper mySwiper">

        <div class="swiper-wrapper">

        <div class="card swiper-slide">
            <div class="card__image">
            <img src="../freshshop/images/1.jpg" alt="card image">
            </div>

            <div class="card__content">
            <span class="card__title">Teddy</span>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="card__image">
            <img src="../freshshop/images/2.jpg" alt="card image">
            </div>

            <div class="card__content">
            <span class="card__title">Collectible</span>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="card__image">
            <img src="../freshshop/images/3.jpg" alt="card image">
            </div>

            <div class="card__content">
            <span class="card__title">Doll</span>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="card__image">
            <img src="../freshshop/images/4.jpg" alt="card image">
            </div>

            <div class="card__content">
            <span class="card__title">Lego</span>
            </div>
        </div>


        <div class="card swiper-slide">
            <div class="card__image">
            <img src="../freshshop/images/5.jpg" alt="card image">
            </div>

            <div class="card__content">
            <span class="card__title">Vehicle toys</span>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="card__image">
            <img src="../freshshop/images/6.jpg" alt="card image">
            </div>

            <div class="card__content">
            <span class="card__title"> Robot</span>
            </div>
        </div>
        </div>
    </section>
    </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 300,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        });
        </script>


    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 class="headcomment">Toys</h1>
                        <p style="font-weight: 900;">Some popular toys for all ages have good reviews.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row special-list">
                <?php
                    include ("../phpConnect/productIndex.php");
                ?>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 class="headcomment">Famous Brand</h1>
                        <p style="font-weight: 900;">Some popular toy brands that people choose</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <!-- <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>Fusce in augue non nisi fringilla</h3>
                                    <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                                </div>
                                <ul class="option-blog">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="container1">
                            <a href="#">
                                <div class="blog-img">
                                    <img class="img-fluid2" src="images/brandBarbies.jpeg" alt="" />
                                    <div class="caption">
                                        <p>Shopping now</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <!-- <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>Fusce in augue non nisi fringilla</h3>
                                    <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                                </div>
                                <ul class="option-blog">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="container1">
                            <a href="#">
                                <div class="blog-img">
                                    <img class="img-fluid2" src="images/brandLego.jpg" alt="" />
                                    <div class="caption">
                                        <p>Shopping now</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <!-- <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>Fusce in augue non nisi fringilla</h3>
                                    <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                                </div>
                                <ul class="option-blog">
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="container1">
                            <a href="#">
                                <div class="blog-img">
                                    <img class="img-fluid2" src="images/brandHotwheels.jpg" alt="" />
                                    <div class="caption">
                                        <p>Shopping now</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div> -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<ul class="mt-3">
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Miniature World</h4>
                            <p>Miniature World is a whimsical wonderland where imagination takes flight, 
                                offering a treasure trove of fun-filled adventures for children of all ages. 
                                Dive into a realm where teddy bears have tea parties, action figures battle epic foes, 
                                and dolls come to life in enchanting tales of make-believe. Welcome to a place where 
                                every toy has a story to tell and laughter knows no bounds.
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>19 Nguyen Huu Tho street, Tan Hung, District 7, Ho Chi Minh city</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:028 3775 5052">028 3775 5052</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:miniatureworld@gmail.com">miniatureworld@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa-solid fa-circle-up fa-shake"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>