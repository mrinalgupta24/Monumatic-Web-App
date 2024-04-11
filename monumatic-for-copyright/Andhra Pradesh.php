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
   <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css"> <!-- slick slider css -->
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
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
               <div class="container">
                  <div class="inner-banner-content">
                     <h1 class="inner-title">
                        <?php $subject = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
                        $subject=str_ireplace("%20"," ",$subject);
                        echo $subject=str_ireplace(".php"," ",$subject);


                        ?></h1>
                  </div>
               </div>
            </div>
            <div class="inner-shape"></div>
         </section>
         <!-- Inner Banner html end-->
         <!-- packages html start -->
         <div class="package-section">
            <div class="container">
               <div class="package-inner">
                  <div class="row">
                     <?php require("connection.php");  ?>
                     <?php
                     $query = "SELECT * FROM Monument_Details where City_Name ='$subject' and Status='Active'";
                     $query_run = mysqli_query($conn, $query);
                     if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
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
                                    
                                       <span> <?php echo $row['currency'] . " ";
                                        if ($row['min_price'] == 0 || $row['min_price'] > 0) {
                                          echo " " . $row['min_price'];
                                          if ($row['max_price'] != 0) {
                                              echo " - " . $row['max_price'];
                                          }
                                      }
                                       ?></span> /  <?php echo $row['unit'] ?>
                                    </h6>
                                 </div>
                                 <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                       <ul>
                                          <li>
                                             <i class="far fa-clock"></i>
                                             <?php echo $row["days"]. " ". "Days"; ?>
                                          </li>
                                          <!-- <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 5
                                       </li> -->
                                          <li>
                                             <i class="fas fa-map-marker-alt"></i>
                                             <?php echo $row["location"]; ?>
                                             <!-- Kartavya Path, New Delhi -->
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="package-content">
                                       <h3>
                                          <a href="#"><?php echo $row["m_name"]; ?></a>
                                       </h3>
                                       <div class="review-area">
                                          <span class="review-text">(100 reviews)</span>
                                          <div class="rating-start" title="Rated 5 out of 5">
                                             <span style="width: 80%"></span>
                                          </div>
                                       </div>
                                       <p><?php echo $row["description"]; ?></p>
                                       <div class="btn-wrap">
                                          <a href="<?php echo $row["url"];?>" class="button-text width-6">See Details<i class="fas fa-arrow-right"></i></a>
                                          <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     <?php
                        }
                     }
                     ?>
                     <!-- <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/qutab_minar.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>Rs 00.00 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          7 Days
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 8
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Seth Sarai, New Delhi
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Qutub Minar</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(120 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div>
                                    <p>The Qutb Minar, also spelled Qutub Minar and Qutab Minar, is a minaret and "victory tower" that forms part of the Qutb complex.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">See Details<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/akshardham.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>Rs 0.00 - 370.00 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          6 Days
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 6
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Pandav Nagar, New Delhi
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Akshardham Mandir</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(100 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                    <p>Swaminarayan Akshardham is a Hindu temple, and spiritual-cultural campus in Delhi, India. The temple is close to the border with Noida.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">See Details<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/humayun_tomb.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>Rs 0.00 - 500.00 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          7 Days
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 6
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Mathura Road, New Delhi
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Humayun Tomb</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(90 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div>
                                    <p>Humayun's tomb is the tomb of the Mughal Emperor Humayun in Delhi, India. The tomb was commissioned by Humayun's first wife and chief consort, Empress Bega Begum under her patronage.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">See Details<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img7.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>$2,000 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          6D/5N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 6
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Portugal
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Beautiful season of the rural village</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(22 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img7.jpg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>$2,000 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          6D/5N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 6
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Portugal
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Summer holiday to the Oxolotan River</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(22 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- packages html end -->
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