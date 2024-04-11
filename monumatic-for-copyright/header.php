<?php
// Start the session
session_start();
 $_SESSION["Serial_Number"] ;
 $_SESSION["User_Id"];
 $_SESSION["Name"];
 $_SESSION["Mobile_Number"];
 $_SESSION["Address"];
 $_SESSION["Country"];
 $_SESSION["Date_Of_Birth"];
 $_SESSION["Govt_Id_Path"];
 $_SESSION["Username"];
 $_SESSION["Email"];
 $_SESSION["Password"];
 $_SESSION["Date_Of_Creation"];
 $_SESSION["Date_Of_Updation"];
 $_SESSION["Verification_status"];
 $_SESSION["Account_Status"];
 $_SESSION["Comments"];
//echo session_id();
?>
<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
            rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Monumatic</title>
</head>

<body>

      <header id="masthead" class="site-header header-primary">
      <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "h7ilpnqa3l");
</script>
            <!-- header html start -->
            <div class="top-header">
                  <div class="container">
                        <div class="row">
                              <div class="col-lg-8 d-none d-lg-block">
                                    <div class="header-contact-info">
                                          <ul>
                                                <li>
                                                      <a href="#"><i class="fas fa-phone-alt"></i> +91 00000 00000</a>
                                                </li>
                                                <li>
                                                      <i class="fas fa-map-marker-alt"></i> Jagan Institute of Management Studies
                                                </li>
                                          </ul>
                                    </div>
                              </div>
                              <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                                    <div class="header-social social-links">
                                          <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                          </ul>
                                    </div>
                                    <!-- <div class="header-search-icon">
                                          <button class="search-icon">
                                                <i class="fas fa-search"></i>
                                          </button>
                                    </div> -->
                              </div>
                        </div>
                  </div>
            </div>
            <div class="bottom-header">
                  <div class="container d-flex justify-content-between align-items-center">
                        <div class="site-identity">
                              <h1 class="site-title">
                                    <a href="index.php">
                                          <img class="white-logo" src="assets/images/Monumatic_White_Logo.png" alt="logo">
                                          <img class="black-logo" src="assets/images/header_logo_monumatic2.png" alt="logo">
                                    </a>
                              </h1>
                        </div>
                        <div class="main-navigation d-none d-lg-block">
                              <nav id="navigation" class="navigation">
                                    <ul>
                                          <li>
                                                <a href="index.php">Home</a>
                                                <!-- <ul>
                                                      <li>
                                                            <a href="index-v2.html">Home 2</a>
                                                      </li>
                                                </ul> -->
                                          </li>
                                          <li class="menu-item-has-children">
                                                <a href="about.php">About</a>
                                                <ul>
                                                      <li>
                                                            <a href="about.php">About Us</a>
                                                      </li>
                                                      <li>
                                                            <a href="our-team.php">Our Team</a>
                                                      </li>
                                                      <!-- <li>
                                                            <a href="career.html">Career</a>
                                                      </li>
                                                      <li>
                                                            <a href="career-detail.html">Career Detail</a>
                                                      </li>
                                                      <li>
                                                            <a href="tour-guide.html">Tour Guide</a>
                                                      </li> -->
                                                     
                                                      <!-- <li>
                                                            <a href="single-page.html">Single Page</a>
                                                      </li> -->
                                                      <li>
                                                            <a href="faq.php">FAQ </a>
                                                      </li>
                                                      <li>
                                                            <a href="testimonial-page.php">Testimonials</a>
                                                      </li>
                                                      <!-- <li>
                                                            <a href="popup.html">Popup</a>
                                                      </li>
                                                      <li>
                                                            <a href="search-page.html">Search Page</a>
                                                      </li>
                                                      <li>
                                                            <a href="404.html">404 Page</a>
                                                      </li> -->
                                                      <!-- <li>
                                                            <a href="comming-soon.html">Comming Soon</a>
                                                      </li> -->
                                                     
                                                      <!-- <li>
                                                            <a href="wishlist-page.html">Wishlist</a>
                                                      </li> -->
                                                </ul>
                                          </li>
                                          <li>
                                                <a href="destination.php">Destination</a>
                                                <!-- <ul>
                                                      <li>
                                                            <a href="destination.html">Destination</a>
                                                      </li>
                                                      <li>
                                                            <a href="tour-packages.html">Tour Packages</a>
                                                      </li>
                                                      <li>
                                                            <a href="package-offer.html">Package Offer</a>
                                                      </li>
                                                      <li>
                                                            <a href="package-detail.html">Package Detail</a>
                                                      </li>
                                                      <li>
                                                            <a href="tour-cart.html">Tour Cart</a>
                                                      </li>
                                                      <li>
                                                            <a href="booking.html">Package Booking</a>
                                                      </li>
                                                      <li>
                                                            <a href="confirmation.html">Confirmation</a>
                                                      </li>
                                                </ul> -->
                                          </li>
                                          <li>
                                                            <a href="gallery.php">Gallery</a>
                                                      </li>
                                          
                                          <!-- <li class="menu-item-has-children"> -->
                                                <!-- <a href="single-page.html">Shop</a> -->
                                                <!-- <ul>
                                                      <li>
                                                            <a href="product-right.html">Shop Archive</a>
                                                      </li>
                                                      <li>
                                                            <a href="product-detail.html">Shop Single</a>
                                                      </li>
                                                      <li>
                                                            <a href="product-cart.html">Shop Cart</a>
                                                      </li>
                                                      <li>
                                                            <a href="product-checkout.html">Shop Checkout</a>
                                                      </li>
                                                </ul> -->
                                          </li>
                                          <li>
                                                <a href="contact.php">Contact Us</a>
                                           </li>
                                     
                                           <?php
                                           if (!empty($_SESSION["Serial_Number"]))
                                            {
                                       ?>
                                             <li>
                                                <a href="user_profile.php">Profile</a>
                                           </li>
                                           <li>
                                                <a href="Admin/logout_for_user.php">Logout</a>
                                           </li>
                                          
                             
                        <?php
                        }
                        else{
                              
                        }
                       
                        ?>

                      
                                          <!-- <li class="menu-item-has-children"> -->
                                                <!-- <a href="#">Dashboard</a> -->
                                                <!-- <ul>
                                                      <li>
                                                            <a href="admin/dashboard.html">Dashboard</a>
                                                      </li>
                                                      <li class="menu-item-has-children">
                                                            <a href="#">User</a>
                                                            <ul>
                                                                  <li>
                                                                        <a href="admin/user.html">User List</a>
                                                                  </li>
                                                                  <li>
                                                                        <a href="admin/user-edit.html">User Edit</a>
                                                                  </li>
                                                                  <li>
                                                                        <a href="admin/new-user.html">New User</a>
                                                                  </li>
                                                            </ul> -->
                                                      </li>
                                                      <!-- <li>
                                                            <a href="admin/db-booking.html">Booking</a>
                                                      </li> -->
                                                      <!-- <li class="menu-item-has-children">
                                                            <a href="admin/db-package.html">Package</a>
                                                            <ul>
                                                                  <li>
                                                                        <a href="admin/db-package-active.html">Package
                                                                              Active</a>
                                                                  </li>
                                                                  <li>
                                                                        <a href="admin/db-package-pending.html">Package
                                                                              Pending</a>
                                                                  </li>
                                                                  <li>
                                                                        <a href="admin/db-package-expired.html">Package
                                                                              Expired</a>
                                                                  </li>
                                                            </ul>
                                                      </li> -->
                                                      <!-- <li>
                                                            <a href="admin/db-comment.html">Comments</a>
                                                      </li>
                                                      <li>
                                                            <a href="admin/db-wishlist.html">Wishlist</a>
                                                      </li> -->
                                                      <!-- <li>
                                                            <a href="admin/login.html">Login</a>
                                                      </li> -->
                                                      <!-- <li>
                                                            <a href="admin/forgot.html">Forget Password</a>
                                                      </li> -->
                                                </ul>
                                          </li>
                                          
                                    </ul>
                              </nav>
                              
                        </div>
                        <?php
                         $_SESSION["User_Id"];
                         $_SESSION["Serial_Number"] ;
                         $_SESSION["Name"];
                         $_SESSION["Mobile_Number"];
                         $_SESSION["Address"];
                         $_SESSION["Country"];
                         $_SESSION["Date_Of_Birth"];
                         $_SESSION["Govt_Id_Path"];
                         $_SESSION["Username"];
                         $_SESSION["Email"];
                         $_SESSION["Password"];
                         $_SESSION["Date_Of_Creation"];
                         $_SESSION["Date_Of_Updation"];
                         $_SESSION["Verification_status"];
                         $_SESSION["Account_Status"];
                         $_SESSION["Comments"];

                        if (empty($_SESSION["Serial_Number"]))
                        {
                              ?>
                        <div class="header-btn">
                              <a href="admin/user_login.php" class="button-primary">LOGIN</a>
                        </div>
                        <?php
                        }
                        else {
                              
                             echo "Hello,".$_SESSION["Name"];   
                        ?>

                        <?php
                        }
                        ?>
                  </div>
            </div>
            <div class="mobile-menu-container"></div>
            
      </header>

</body>

</html>