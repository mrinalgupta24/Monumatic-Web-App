<?php
include "header.php";
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
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Monumatic </title>
</head>

<body>
   <div id="siteLoader" class="site-loader">
      <div class="preloader-content">
         <img src="assets/images/loader1.gif" alt="">
      </div>
   </div>
   <div id="page" class="full-page">

      <main id="content" class="site-main">
         <!-- Inner Banner html start-->
         <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/monument_header.png);">
               <div class="container">
                  <div class="inner-banner-content">
                     <h1 class="inner-title">DESTINATIONS</h1>
                  </div>
               </div>
            </div>
            <div class="inner-shape"></div>
         </section>
         <!-- Inner Banner html end-->
         <!-- destination field html end -->
         <section class="destination-section destination-page">
            <?php
            require 'connection.php';
            $query = "SELECT * FROM city_data where city_status='Active' ORDER BY city_name";
            $query_run = mysqli_query($conn, $query);
            ?>
            <div class="container">
               <div class="xdestination-inner destination-three-column">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="row">
                           <?php
                           if (mysqli_num_rows($query_run) > 0) {
                              foreach ($query_run as $row) {
                           ?>
                                 <div class="col-sm-3">
                                    <div class="desti-item overlay-desti-item">
                                       <figure class="desti-image">
                                          <!-- <img src="assets/images/qutab_minar.jpeg" alt=""> -->
                                          <img src="<?php echo $row['imagepath'] ?>" alt="">
                                       </figure>
                                       <div class="meta-cat bg-meta-cat">
                                          <a href="#"><?php echo $row['Country'] ?></a>
                                       </div>
                                       <div class="desti-content">
                                          <h3>
                                             <a href="<?php echo $row['url'] ?>"><?php echo $row['city_name'] ?> </a>
                                          </h3>
                                          <!-- <div class="rating-start" title="Rated 5 out of 4">
                                             <span style="width: 53%"></span>
                                          </div> -->
                                       </div>
                                    </div>
                                 </div>
                           <?php
                              }
                           }
                           ?>

                           
                           <!-- <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">West Bengal</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Maharashtra</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Rajasthan</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/qutab_minar.jpeg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Tamil Nadu</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 53%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Bengaluru</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Gujarat</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Uttar Pradesh</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                                    <div class="row">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/qutab_minar.jpeg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Haryana</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 53%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Punjab</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Madhya Pradesh</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">INDIA</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Kerela</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
                  <!-- <div class="row"> -->
                  <!-- <div class="col-lg-5">
                        <div class="row">
                          
                        </div>
                     </div> -->
                  <!-- <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img1.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">THAILAND</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Disney Land</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 53%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">NORWAY</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Besseggen Ridge</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </section>
         <!-- destination section html start -->
         <!-- subscribe section html start -->
         <section class="subscribe-section" style="background-image: url(assets/images/monument_header.png);">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="section-heading section-heading-white">
                        <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                        <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                        <h4>Sign up now to recieve hot special offers and information about the best tour packages,
                           updates and discounts !!</h4>
                        <div class="newsletter-form">
                           <form>
                              <input type="email" name="s" placeholder="Your Email Address">
                              <input type="submit" name="signup" value="SIGN UP NOW!">
                           </form>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                           ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus
                           occaecat luctus eleifend tempo ribus.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe html end -->
      </main>

      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
      <!-- custom search field html -->
      <div class="header-search-form">
         <div class="container">
            <div class="header-search-container">
               <form class="search-form" role="search" method="get">
                  <input type="text" name="s" placeholder="Enter your text...">
               </form>
               <a href="#" class="search-close">
                  <i class="fas fa-times"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- header html end -->
   </div>

   <!-- JavaScript -->
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   <script src="assets/js/jquery.js"></script>
   <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
   <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
   <script src="assets/js/jquery.counterup.js"></script>
   <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
   <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
   <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
   <script src="assets/vendors/slick/slick.min.js"></script>
   <script src="assets/js/jquery.slicknav.js"></script>
   <script src="assets/js/custom.min.js"></script>
</body>

<?php
include "footer.php";
?>

</html>