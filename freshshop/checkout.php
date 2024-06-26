<?php
require_once ('../phpConnect/connectData.php');
$query = "SELECT * FROM carts";
// Tính tổng các giá trị total
$sql_total = "SELECT SUM(total) AS total_sub FROM carts";
$result_total = mysqli_query($conn, $sql_total);
$row_total = mysqli_fetch_assoc($result_total);
$total_sub = $row_total['total_sub'];

if(isset($_POST['place_order_btn'])) {
    // Kiểm tra kết nối
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Lấy dữ liệu từ biểu mẫu và chuyển đến các biến
    $email = $_POST['email'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $payment = $_POST['payment'];
    $total = $_POST['total'];

    // Tạo câu lệnh INSERT để thêm dữ liệu vào bảng orders
    $sql = "INSERT INTO orders (email, firstName, lastName, payment, total) VALUES ('$email', '$firstName', '$lastName', 'COD', '$total')";

    // Thực thi câu lệnh SQL
    if(mysqli_query($conn, $sql)){
        header("Location: payment.php"); // Chuyển hướng đến trang payment.php
        exit(); // Dừng kịp thời để chuyển hướng hoạt động
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-8d95b745961f6b33ab3aa1b98a45291a.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">

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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<form action="" class="form01" method="POST" novalidate>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option>$ USD</option>
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="tel:028 3775 5052"> 028 3775 5052</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color fa-beat"></i> My Account</a></li>
                            <!-- <li><a href=""><i class="fas fa-location-arrow"></i> Our location</a></li> -->
                            <li><a href="contact-us.html"><i class="fas fa-headset fa-beat"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                            <option>Register Here</option>
                            <option>Sign In</option>
                        </select>
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo01.png" class="logo" alt="logo"><b>Miniature World</b></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link " href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.php">Sidebar Shop</a></li>
								<!-- <li><a href="shop-detail.php">Shop Detail</a></li> -->
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <!-- <li><a href="my-account.php">My Account</a></li> -->
                                <li><a href="wishlist.php">Wishlist</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">

                        <a href="cart.php">
                          <i class="fa fa-shopping-bag"></i>
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
                        <?php
                            include ("../phpConnect/cartIndex.php");
                        ?>
                    </ul>
                </li>
                <button type="submit" class="btn btn-success btnUpdate mt-3" name="update_cart_btn"><a href="cart.php">View Cart</a></button>

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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->



    
        <h1 class="text-center01 mt-3"><b>Checkout Form</b></h1>
        <!-- Progress bar -->
        <div class="progressbar01">
            <div class="progress01" id="progress01"></div>

            <div class="progress-step01 progress-step-active01" data-title="Account"></div>
            <div class="progress-step01" data-title="Billing address"></div>
            <div class="progress-step01" data-title="Shipping Method"></div>
            <div class="progress-step01" data-title="Your order"></div>
            <div class="progress-step01" data-title="Feedback"></div>

        </div>

        <!-- Steps -->
        <div class="form-step01 form-step-active01">
            <div class="col-sm-6 col-lg-6 mb-3 container ">
                    <div class="form-row row">
                        <div class="form-group col-md-6">
                            <label for="InputEmail" class="mb-0">Email Address</label>
                            <input name ="email" type="email" class="form-control" id="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword" class="mb-0">Password</label>
                            <input name ="password" type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
            </div>
            <div class="btns-group01">
                <a href="#" class="btn0001 btn-next01   mr-4">Next</a>
            </div>
        </div>
        <div class="form-step01  ">
            <div class="col-sm-6 col-lg-6 mb-3 container ">
                <div class="checkout-address">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name *</label>
                                <input type="text" name ="firstname" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback"> Valid first name is required. </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name *</label>
                                <input type="text" name ="lastname" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback"> Valid last name is required. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address *</label>
                            <input type="email"  class="form-control" id="email" placeholder="">
                            <div class="invalid-feedback"> Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Address *</label>
                            <input type="text" name ="address" class="form-control" id="address" placeholder="" required>
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my
                                billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next
                                time</label>
                        </div>
                        <hr class="mb-4">
                        <div class="title"> <span>Payment</span> </div>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="payment" name="paymentMethod" type="radio" class="custom-control-input"
                                    checked required>
                                <label class="custom-control-label" for="credit">COD</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                    required disabled>
                                <label class="custom-control-label" for="debit">Debit card (No available)</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                    required disabled>
                                <label class="custom-control-label" for="paypal">Paypal (No available)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required disabled> <small
                                    class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback"> Name on card is required </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required disabled>
                                <div class="invalid-feedback"> Credit card number is required </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required disabled>
                                <div class="invalid-feedback"> Expiration date required </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required disabled>
                                <div class="invalid-feedback"> Security code required </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="payment-icon">
                                    <ul>
                                        <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                        <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                        <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                        <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                        <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-1">
                </div>
            </div>

            <!-- <div class="input-group01">
            
             <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" /> 
          </div>
          <div class="input-group01">
             <label for="email">Email</label>
            <input type="text" name="email" id="email" /> 
          </div> -->
            <div class="btns-group01">
                <a href="#" class="btn001 btn-prev01 col-lg-12 mb-auto mr-auto">Previous</a>
                <a href="#" class="btn0001 btn-next01 col-lg-12 mb-3">Next</a>
            </div>
    </div>
        
        <div class="form-step01 ">
            <!-- <div class="input-group01">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" />
          </div>
          <div class="input-group01">
            <label for="ID">National ID</label>
            <input type="number" name="ID" id="ID" />
          </div> -->
            <div class="col-md-12 col-lg-12 ">
                <div class="shipping-method-box">

                    <div class="mb-4">
                        <div class="custom-control custom-radio">
                            <input id="shippingOption1" name="shipping-option" class="custom-control-input"
                                checked="checked" type="radio">
                            <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span
                                class="float-right font-weight-bold">FREE</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btns-group01">
                <a href="#" class="btn001 btn-prev01 col-lg-12 mb-auto mr-auto">Previous</a>
                <a href="#" class="btn0001 btn-next01 col-lg-12 mb-3">Next</a>
            </div>        </div>
        <div class="form-step01">
            <div class="col-md-12 col-lg-12">
                <div class="order-box">
                    <div class="d-flex">
                        <div class="font-weight-bold">Product</div>
                        <div class="ml-auto font-weight-bold">Total</div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold"><?php echo $total_sub ?></div>
                        <input hidden type="text" name ="total" value="<?php echo $total_sub ?>">
                    </div>

                    <hr class="my-1">

                    <div class="d-flex">
                        <h4>Shipping Cost</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5"><?php echo $total_sub ?></div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="btns-group01">
                <a href="#" class="btn001 btn-prev01 col-lg-12 mb-auto mr-auto">Previous</a>
                <a href="#" class="btn0001 btn-next01 col-lg-12 mb-3">Next</a>

            </div>
        </div>
        <div class="form-step01">
            <div class="wrapper01">
                 <!-- <button class="feedback_btn01 send_btn01">Send Your Feedback</button> -->
                <div class="modal_wrapper01">
                    <div class="shadow01 close_btn01"></div>
                    <div class="modal01">
                    <div class="close_btn01">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    
                    <div class="header01">
                        <h3>Give Feedback</h3>
                        <p>What do you think of this software?</p>
                        
                        <div class="feedback_icons01">
                        <ul>
                            <li>
                            <i class="fa-regular fa-face-smile"></i>
                            </li>
                            <li>
                            <i class="fa-regular fa-face-smile-wink"></i>
                            </li>
                            <li>
                            <i class="fa-regular fa-face-kiss-beam"></i>
                            </li>
                            <li>
                            <i class="fa-regular fa-face-grin-hearts"></i>
                            </li>
                            <li>
                            <i class="fa-regular fa-face-meh-blank"></i>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="body01">
                        <p>Do you have any thoughts you'd like to share?</p>
                        <textarea class="textarea01"></textarea>
                    </div>
                    <div class="footer01">
                        <button class="send_btn01">Send</button>
                        <button class="cancel_btn01">cancel</button>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript " src="js/feedback.js">


</script>
            <div class="btns-group01">
                <a href="#" class="btn001 btn-prev01 col-lg-12 mb-auto mr-auto">Previous</a>
                <button class="btn0001 btn-next01 col-lg-12 mb-3" name="place_order_btn">  Place order</a>
           
            </div>
        </div>
    <script src="js/main.js" defer></script>
</form>


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.00am to 05.00pm</li>
                                <li>Saturday: 10.00am to 08.00pm</li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
								<div class="form-group" sdsdsdsdsdsđssd>
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
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
                                    <p><i class="fas fa-map-marker-alt"></i>19 Nguyen Huu Tho street, Tan Hung, District
                                        7, Ho Chi Minh city</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:028 3775 5052">028 3775
                                            5052</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a
                                            href="mailto:miniatureworld@gmail.com">miniatureworld@gmail.com</a></p>
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
            <a href="https://html.design/">html design</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa-solid fa-circle-up fa-shake"></i></a>

    <!-- ALL JS FILES -->
    <script src="https://kit.fontawesome.com/4a0046fff5.js" crossorigin="anonymous"></script>
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