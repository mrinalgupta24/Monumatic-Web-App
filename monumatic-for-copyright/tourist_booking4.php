<?php
include "header.php";
include_once 'config.php'; 
$monument_name = $_POST['monu_name']; 
session_start();        
session_set_cookie_params(0, '/PATH/; SameSite=None', true, true);     
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
   <title>Monumatic</title>
   <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#paypal_form").submit(function(){
            setData(jQuery("#amount").val(), jQuery("#item").val());
        });
        function setData(amount, item) {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            
          };
          xhttp.open("GET", "insertData.php?amount="+amount+"&item="+item, true);
          xhttp.send();
        }
    });
</script>
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
                     <h1 class="inner-title">Tourist Bookings</h1>
                  </div>
               </div>
            </div>
            <div class="inner-shape"></div>
         </section>
         <!-- Inner Banner html end-->
         <div class="step-section cart-section">
            <div class="container">
               <div class="step-link-wrap">
                  <div class="step-item active">
                     Your cart
                     <a href="#" class="step-icon"></a>
                  </div>
                  <div class="step-item active">
                     Your Details
                     <a href="#" class="step-icon"></a>
                  </div>
                  <div class="step-item active">
                     Finish
                     <a href="#" class="step-icon"></a>
                  </div>
               </div>
               <!-- step three form html start -->
               <div class="confirmation-outer">
               <form method="POST" action="<?php echo PAYPAL_URL; ?>" method="POST" id="paypal_form" >
               <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
               <input type="hidden" name="item_name" value="MONUMENT TICKET" id="item" required><br><br>
               <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
                  <!-- Specify a Buy Now button. -->
                  <input type="hidden" name="cmd" value="_xclick">
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">

                     <div class="booking-form-wrap">
                        <div class="booking-content">
                           <div class="form-title">
                              <span>1</span>
                              <h3>Your Details</h3>
                           </div>
                           <div class="row">
                           <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Monument Name</label>
                                    <input type="text" readonly class="form-control" name="monu_namebooking" value = "<?php echo  $_POST['monu_name'];  ?>" >
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" readonly class="form-control" name="firstname_booking" value = <?php echo $_POST['firstname_booking'];?> >
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" readonly class="form-control" name="lastname_booking"value = <?php echo $_POST["lastname_booking"];?> >
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" readonly class="form-control" name="age_booking" value = <?php echo $_POST["age_booking"];?>>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" readonly class="form-control" name="email_booking" value = "<?php echo $_POST["email_booking"];?>" >
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Phone No.</label>
                                    <input type="text" readonly class="form-control" name="lastname_booking" value = "<?php echo $_POST['Mobile_booking'];?>">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Address</label>
                                    <input readonly type="text" class="form-control" name="address_booking" value = "<?php echo $_POST['address_booking'];?>">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" readonly class="form-control" name="country_booking" value = "<?php echo $_POST['country_booking'];?>">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" readonly class="form-control" name="gender" value = "<?php echo $_POST['gender'];?>">

                                    <!-- <input type="text" class="form-control" name="country_booking"> -->
                                    <!-- <select name="gender">
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                    </select> -->
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Nationality</label>
                                    <!-- <input type="text" class="form-control" name="country_booking"> -->
                                    <input type="text" class="form-control" readonly name="visitor_type" value = "<?php echo $_POST['visitor_type'];?>">

                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Parking</label>
                                    <input type="text" class="form-control" readonly name="parking" value = "<?php echo $_POST['parking'];?>">

                                    <!-- <input type="text" class="form-control" name="country_booking"> -->
                                   
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Date Of Visit</label>
                                    <input type="text" readonly class="form-control" name="date_booking" value="<?php echo $_POST['date_booking'];?> ">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Ticket Price</label>
                                    <input type="text" readonly class="form-control" name="date_booking" value="<?php echo $_SESSION['t_price'].".00";?> ">
                                 </div>
                              </div>
                             <?php if($_POST['parking']=="Car")
                                          {
                                              $parking_cost = "100.00";

                                          }
                                          else if ($_POST['parking']=="Bike")
                                          {
                                              $parking_cost= "50.00";

                                          }
                                          else
                                          {
                                              $parking_cost=  "0.00";
                                          }
                                       ?>

                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Parking Price</label>
                                    <input type="text" readonly class="form-control" name="date_booking" value="<?php echo $parking_cost?> ">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>GST</label>
                                    <?php 
                                       $gst = ($_SESSION['t_price'] + $parking_cost) ;
                                       $gst = $gst *'.18';
                                    ?>
                                    <input type="text" readonly class="form-control" name="date_booking" value="<?php echo $gst; ?> ">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>GRAND TOTAL</label>
                                    <input type="text" readonly class="form-control" name="date_booking" value="<?php echo $gst + $parking_cost + $_SESSION['t_price'];?> ">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>MAKE PAYMENT</label>
                                    <input type="submit" class="button-primary"  value="Make Payment">
                                 </div>
                              </div>
                              <!-- <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Compute Cost</label>
                                    <input type="reset" class="button-primary" value="Compute Cost ">
                                 </div>
                              </div> -->
                           </div>
                        </div>
                        <input type="hidden" required="" name="amount" id="amount" value = "<?php echo $gst + $parking_cost + $_SESSION['t_price'];?>">

                        </form>
                  

                  
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

<?php 
 $_SESSION['monument_name_ticket_generation'] = $_POST['monu_name'];
 $_SESSION['firstname_ticket_generation'] = $_POST['firstname_booking'];
 $_SESSION['lastname_ticket_generation'] = $_POST['lastname_booking'];
 $_SESSION['age_ticket_generation'] = $_POST['age_booking'];
 $_SESSION['email_ticket_generation'] = $_POST['email_booking'];
 $_SESSION['mobile_ticket_generation'] = $_POST['Mobile_booking'];
 $_SESSION['address_ticket_generation'] = $_POST['address_booking'];
 $_SESSION['country_ticket_generation'] = $_POST['country_booking'];
 $_SESSION['gender_ticket_generation'] = $_POST['gender'];
 $_SESSION['vistor_ticket_generation'] = $_POST['visitor_type'];
 $_SESSION['parking_ticket_generation'] = $_POST['parking'];
 $_SESSION['date_ticket_generation'] = $_POST['date_booking'];
 $_SESSION['visit_price_ticket_generation'] = $_SESSION['t_price'];
 $_SESSION['parking_cost_ticket_generation'] = $parking_cost;
 $_SESSION['gst_ticket_generation'] = $gst;
 $_SESSION['total_ticket_generation'] = $_SESSION['t_price'] +$parking_cost+$gst;
?>

