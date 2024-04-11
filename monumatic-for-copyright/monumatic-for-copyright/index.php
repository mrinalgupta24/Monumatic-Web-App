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
   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
      rel="stylesheet">
   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Monumatic </title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#show').click(function() {
      $('.popup-wraper').toggle("slide");
    });
});
</script>
</head>

<body class="home">
   <div id="siteLoader" class="site-loader">
      <div class="preloader-content">
         <img src="assets/images/loader1.gif" alt="">
      </div>
   </div>
    <!-- Popup html start form here -->
    <div class="popup-wraper">
            <div class="popup-inner">
               <div class="popup-content">
                  <h2>Attention !!!!!! <br/>|| NOTICE ||</h2>
                  <h3>Please note that this is just an application made for demonstration project any ticket booked using this app is not valid anywhere
                     !</br> Team Monumatic Will not be liable to refund any money paid on this platform</h3>
                     <h4>if you want a demo of this application contact us @ shubham@3rimaging.com</h4>
               </div>
               <div class="popup-image">
                  <img src="assets/images/img52.png" alt="">
               </div>
               <div class="popup-close-btn" id="show">
              <a> <h3></h3></a>
               </div>
            </div>
         </div>
      </div>
   <div id="page" class="full-page">

      <main id="content" class="site-main">
         <section class="home-slider-section">
            <div class="home-slider">
               <div class="home-banner-items">
                  <div class="banner-inner-wrap" style="background-image: url(assets/images/red_fort.jpg);"></div>
                  <div class="banner-content-wrap">
                     <div class="container">
                        <div class="banner-content text-center">
                           <h2 class="banner-title">TRAVELLING AROUND INDIA</h2>
                           <p>"Adventure awaits, go explore our भारत!"</p>
                        </div>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
               <div class="home-banner-items">
                  <div class="banner-inner-wrap" style="background-image: url(assets/images/background.jpg);"></div>
                  <div class="banner-content-wrap">
                     <div class="container">
                        <div class="banner-content text-center">
                           <h2 class="banner-title">EXPLORE YOUR HISTORICAL PLACES</h2>
                           <p>Discover more about history and become an explorer. Book your tickets now!</p>
                        </div>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </div>
         </section>
         <section class="destination-section">
            <div class="container">
               <div class="section-heading">
                  <div class="row align-items-end">
                     <div class="col-lg-7">
                        <br><br><br>
                        <h5 class="dash-style">POPULAR DESTINATION</h5>
                        <h2>TOP NOTCH DESTINATIONS</h2>
                     </div>
                     <div class="col-lg-5">
                        <div class="section-disc">
                           India is home to numerous magnificent monuments, some of which date back to ancient times and
                           have significant cultural and historical importance.
                        </div>
                     </div>
                  </div>
               </div>
               <?php
            require 'connection.php';
            $query = "SELECT * FROM city_data";
            $query_run = mysqli_query($conn, $query);
            ?>
                <div class="container">
                    <div class="destination-inner destination-three-column">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <?php
      
                           if (mysqli_num_rows($query_run) > 0) {
                               $count = 0;
                               while ($row = mysqli_fetch_assoc($query_run)) {
                                   if ($count < 4) {
                                 
                           ?>
                                    <div class="col-sm-3">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="<?php echo $row['imagepath'] ?>" alt="">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="">INDIA</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="<?php echo $row['url'] ?>"><?php echo $row['city_name'] ?></a>
                                                </h3>
                                  
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                                  $count++;
                                  
                              }
                
                             
                           }
                           }
                           ?>

                        </div>
                        
                  <div class="btn-wrap text-center">
                     <a href="destination.php" class="button-primary">MORE DESTINATION</a>
                  </div>
                    
               </div>
            </div>
         </section>
         <!-- Home packages section html start -->
         <?php
            require 'connection.php';
            $query = "SELECT * FROM Monument_Details";
            $query_run = mysqli_query($conn, $query);
            ?>
         <section class="package-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                        <h2>POPULAR MONUMENTS</h2>
                        <p>India is a land of diverse cultural heritage and architectural wonders. Here are some of the
                           most popular monuments in India that attract tourists from all over the world.</p>
                     </div>
                  </div>
               </div>
              
               <div class="package-inner">
                        <div class="row">
                            <?php
                              if (mysqli_num_rows($query_run) > 0) {
                                 $count = 0;
                                 while ($row = mysqli_fetch_assoc($query_run)) {
                                     if ($count < 3) {
                           ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="package-wrap">
                                    <figure class="feature-image">
                                        <a href="#">
                                            <img src="<?php echo $row['imagepath'] ?>" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-price">
                                        <h6>
                                            <span>
                                                <?php 
                                            if ($row['min_price'] == 0 && $row['max_price'] > 0) {
                                                echo $row['currency'] . " ";
                                                echo $row['max_price'];
                                             } else if ($row['min_price'] > 0 && $row['max_price'] == 0) {
                                                echo $row['currency'] . " ";         
                                                echo $row['min_price'];
                                             } else if ($row['min_price'] > 0 && $row['max_price'] > 0) {
                                                if ($row['min_price'] == $row['max_price']) {
                                                   $randomPrice = mt_rand($row['min_price'] * 100, $row['max_price'] * 100) / 100;
                                                echo $row['currency'] . " ";                                                
                                                   echo $randomPrice;
                                                } else if ($row['min_price'] > $row['max_price']) {
                                                   echo "Condition not applicable.";
                                                } else {
                                                echo $row['currency'] . " ";
                                                   echo $row['min_price'] . " - " . $row['max_price'];
                                                }
                                             } else {
                                                echo $row['currency'] . " ";                                                
                                                echo "00.00";
                                             }
                                            ?>
                                            </span>
                                            / <?php echo $row['unit'] ?>
                                        </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                        <div class="package-meta text-center">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    <?php echo $row['days'] ?>
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <?php echo $row['location'] ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="package-content">
                                            <h3>
                                                <a href="#"><?php echo $row['m_name'] ?></a>
                                            </h3>
                                            <div class="review-area">
                                                <span class="review-text">(125 reviews)</span>
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 80%"></span>
                                                </div>
                                            </div>
                                            <?php echo $row['description'] ?>
                                            <div class="btn-wrap">
                                                <a href="<?php echo $row['url'] ?>" class="button-text width-6">See Details<i
                                                        class="fas fa-arrow-right"></i></a>
                                                <a href="#" class="button-text width-6">Wish List<i
                                                        class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     <?php
                                                  $count++;
                                  
                              }
                
                             
                           }
                           }
                           ?>
               </div>
            </div>
         </section>
         <section class="callback-section">
            <div class="container">
               <div class="row no-gutters align-items-center">
                  <div class="col-lg-5">
                     <div class="callback-img" style="background-image: url(assets/images/traveller.jpg);">
                        <div class="video-button">
                           <a id="video-container" data-video-id="IUN664s7N-c">
                              <i class="fas fa-play"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="callback-inner">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">MONUMATIC</h5>
                           <h2>BENEFITS OF PRE - BOOKING TICKETS</h2>
                           <p>The benefits of pre-booking tickets include guaranteed entry, time-saving, cost-saving,
                              and better planning and organization. Overall, pre-booking tickets can enhance the travel
                              experience by providing convenience and helping travelers make the most of their time at
                              the attraction.</p>
                        </div>
                        <div class="callback-counter-wrap">
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon1.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">10</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Satisfied Clients
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon2.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">5</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Active Users
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon3.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">15</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Tickets Booked
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon4.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">150</span>+
                                 </span>
                                 <span class="counter-text">
                                    Monuments & Museums
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="support-area">
                           <div class="support-icon">
                              <img src="assets/images/icon5.png" alt="">
                           </div>
                           <div class="support-content">
                              <h4>Our 24/7 Helpdesk Portal</h4>
                              <h3>
                                 <a href="https://monumatic-helpdesk.cu.ma/Monumatic-Helpdesk/"
                                    target="_blank">&nbsp;&nbsp;Visit Here</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="activity-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                        <h2>ADVENTURE & ACTIVITY</h2>
                        <p>"The world is a book and those who do not travel read only one page."  </p>
                     </div>
                  </div>
               </div>
               <div class="activity-inner row">
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="assets/images/india-gate.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Monuments</a>
                           </h4>
                           <p>100+ Destination</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="assets/images/taj-mahal.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Heritage Sites</a>
                           </h4>
                           <p>60 Destination</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="assets/images/tent.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Camping</a>
                           </h4>
                           <p>80 Destination</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="assets/images/map.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Exploring</a>
                           </h4>
                           <p>200 Destination</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="best-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="section-heading">
                        <h5 class="dash-style">OUR TOURIST GALLERY</h5>
                        <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                        <p>A tourist experience can include a wide range of activities and factors, such as accommodation, transportation, attractions, food and beverages, entertainment, cultural activities, social interactions, and more</p>
                     </div>
                     <figure class="gallery-img">
                        <img src="assets/images/tourist1.jpg" alt="">
                     </figure>
                  </div>
                  <div class="col-lg-7">
                     <div class="row">
                        <div class="col-sm-6">
                           <figure class="gallery-img">
                              <img src="assets/images/tourist2.jpg" alt="">
                           </figure>
                        </div>
                        <div class="col-sm-6">
                           <figure class="gallery-img">
                              <img src="assets/images/tourist3.jpg" alt="">
                           </figure>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <figure class="gallery-img">
                              <img src="assets/images/tourism4.jpg" alt="">
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
                  </div>
               </div>
            </div> -->
         </section>
         </main>

      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
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
   </div>

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