<?php
session_start();
require_once "./config/utils.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 06:52:20 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Houston | Contact</title>
  <!-- google fonts roboto regular -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' type='text/css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lora:400,700' type='text/css'>
  <link rel="stylesheet" href="css/owl.carousel.css">
  <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/jquery-ui.structure.css">
  <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/jquery.countdown.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/red.css">
  <link rel="stylesheet" href="css/select2.css">
  <link rel="stylesheet" href="css/jquery.raty.css" />
  <link rel="stylesheet" href="css/hotel.style.css">
</head>
<body>
<div id="rq-circle-loader-wrapper">
  <div id="rq-circle-loader-center">
    <div class="rq-circle-load">
      <img src="img/oval.svg" alt="Page Loader">
    </div>
  </div>
</div>
  <div id="main-wrapper">
    <!--================================
                SIDE MENU
    =================================-->
    <!-- PAGE OVERLAY WHEN MENU ACTIVE -->
    <div class="rq-side-menu-overlay"></div>
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    <div class="rq-side-menu-wrap">
        <!-- OVERLAY -->
        <div class="rq-dark-overlay"></div>
        <!-- OVERLAY END -->

        <div id="rq-side-menu" class="rq-side-menu">
            <div class="rq-side-menu-widget-wrap">
                <div class="rq-login-form-wrapper">
                    <h3>User Login</h3>
                    <p>Login to add new listing </p>

                    <div class="rq-login-form">
                        <form action="#">
                            <input type="text" name="rq-user-name" id="rq-user-input" placeholder="User Name">
                            <input type="password" name="rq-user-password" id="rq-user-password" placeholder="Password">
                            <button type="submit">Login</button>
                        </form>
                    </div>

                    <div class="rq-social-login-opt">
                        <a href="#" class="rq-social-login-btn rq-facebook-login">Login with Facebook</a>
                        <a href="#" class="rq-social-login-btn rq-twitter-login">Login with Twitter</a>
                    </div>

                    <div class="rq-other-options">
                        <a href="#" class="rq-forgot-pass">Forget Password ?</a>
                        <a href="#" class="rq-signup">Sign up</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="rq-side-menu-close-button" id="rq-side-menu-close-button">Close Menu</button>
    </div>
    <!-- SIDE MENU END -->


  <header>
    <!-- Navigation Menu start-->
    <!-- Navigation Menu start-->
    <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Navbar Toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="index-2.html"><img class="logo" src="img/logo.png" alt="Houston"></a>
        </div>
        <!-- Navbar Toggle End -->

        <!-- navbar-collapse start-->
        <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse" role="navigation">
          <ul class="nav navbar-nav rq-menus">
              <li>
                <a href="index-2.html">Home</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="home.html">Homepage 2</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="select-room-grid.html">Room</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="select-room-grid.html">Room</a>
                    </li>
                    <li>
                        <a href="single-room.html">Single Room</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="about-us.html">About</a>
              </li>
              <li>
                <a href="cart.html">Pages</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="checkout.html">Check Out</a>
                    </li>
                    <li>
                        <a href="comming-soon.html">Comming Soon</a>
                    </li>
                    <li>
                        <a href="404.html">404</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="blog.html">Blog</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="blog-details.html">Blog Details</a>
                    </li>
                </ul>
              </li>
              <li class="active">
                <a href="contact.html">Contact</a>
              </li>
          </ul>
        </div>
        <!-- navbar-collapse end-->

        <div class="rq-extra-btns-wrapper">
            <div class="rq-language">
                <select class="js-example-placeholder-single form-control">
                    <option value="Eng">EN</option>
                    <option value="Spn">SPN</option>
                    <option value="Ger">GER</option>
                    <option value="Rus">RUS</option>
                </select>
            </div>
            <button id="rq-side-menu-btn" class="cd-btn btn rq-sidemenu-btn"></button>
        </div>

      </div>
    </nav>
    <!-- Navigation Menu end-->
  </header> <!-- / rq-header-section end here-->
    
    <div id="map"></div>    

    <div class="rq-contact-message">
      <div class="container">
       <div class="rq-submit-review">
           <div class="row">
             <div class="col-md-8 col-sm-8">
              <h2>send a message</h2>
              <form action="#">
                <input type="text" name="rq-contact-name" id="rq-contact-name" placeholder="Name">
                <input type="email" name="rq-contact-email" id="rq-contact-email" placeholder="Email">
                <input type="text" name="rq-contact-web" id="rq-contact-web" placeholder="Web">
                <textarea name="rq-contact-message" id="rq-contact-message" cols="30" rows="5" placeholder="Message"></textarea>
                <button type="submit">Submit</button>
              </form>
             </div><!----- /col-md-8  ------>
             <div class="col-md-3 col-md-offset-1 col-sm-4">
               <div class="rq-address-wrapper">
                <h5>address 1</h5>
                <ul>
                  <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <a href="#">Green lake, Hotel plaza <br> <span>new york, USA</span> </a>
                  </li>
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="#">807 302 2186</a>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#">mail@domain.com</a>
                  </li>
                </ul>
               </div>

               <div class="rq-address-wrapper rq-message-address-2">
                <h5>address 2</h5>
                <ul>
                  <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <a href="#">Green lake, Hotel plaza <br> <span>new york, USA</span> </a>
                  </li>
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="#">807 302 2186</a>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#">mail@domain.com</a>
                  </li>
                </ul>
               </div>
             </div>
           </div><!---- /row ---->
         </div>
        </div>
      </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="rq-footer-top">
          <div class="container">
            <div class="row">
              <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-logo">
                  <img src="img/footer-logo.png" class="img-responsive" alt="Responsive image" />
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <h5>address</h5>
                <address>
                    <ul>
                      <li class="rq-hotel-address"><i class="fa fa-map-marker"></i>Green lake, Hotel plaza <br>new york, USA</li>
                      <li class="rq-phone"><i class="fa fa-phone"></i>807 302 2186</li>
                      <li class="rq-email"><i class="fa fa-envelope-o"></i>mail@domain.com</li>
                  </ul>
                </address>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h5>useful link</h5>
                <ul class="rq-footer-links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Booking System</a></li>
                  <li><a href="#">Hotel Services</a></li>
                  <li><a href="#">Booking Agent</a></li>
                  <li><a href="#">Conntact</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <h5>newsletter</h5>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                <div class="rq-common-btn">
                   <button class="btn rq-btn-primary" type="submit">submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="rq-footer-bottom">
            <div class="container">
                <div class="row">
                    <p>&copy;Copyright  2016. All right researved</p>
                </div>
            </div>
        </div>
    </footer>
  </div><!-- main-wrapper -->
  <!-- Latest jQuery plugin-->
  <script src="js/main.js"></script>
  <!-- Latest compiled and minified JavaScript for bootstrap-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpKAwq-qKxzm-9D1405KCFp7ZTtu_Vimg"></script>
  <script src="js/googleMap.js"></script>
  <script src="js/customGoogleMap.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
 <!--  // <script src="js/bootstrap-datepicker.js"></script> -->
  <script src="js/select2.min.js"></script>
  <script src="js/icheck.min.js"></script>
  <script src="js/jquery.raty.js"></script>
  <script src="js/scripts.js"></script>
</body>

<!-- Mirrored from redqteam.com/sites/houston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 06:52:20 GMT -->
</html>
