<?php
include "header.php";
session_start();

?>
<?php 
// Include configuration file 
include_once 'config.php'; 
 
// Include database connection file 
include_once 'connection.php'; 
?>
<?php
// echo $today = date("Y-m-d");
// echo $_SESSION['Date_Of_Birth'];
$diff = date_diff(date_create($_SESSION['Date_Of_Birth']), date_create($today));
$age = $diff->format('%y');
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
         <div class="step-section booking-section">
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
                  <div class="step-item">
                     Finish
                     <a href="#" class="step-icon"></a>
                  </div>
               </div>
               <div class="row">
               <div class="col-lg-12 right-sidebar">
                     <!-- step one form html start -->
                  <form method="POST" action="tourist_booking4.php" method="POST" >
                <!-- //  <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>"> -->
                  <!-- <input type="hidden" name="item_name" value="MONUMENT TICKET" id="item" required><br><br> -->
                     <input type="hidden" name ="monu_name" value="<?php echo $_POST['m_name']; ?>">
                    

                     <div class="booking-form-wrap">
                        <div class="booking-content">
                           <div class="form-title">
                              <span>1</span>
                              <h3>Your Details</h3>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" name="firstname_booking" value = <?php echo $_SESSION['FName'];?> >
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="lastname_booking"value = <?php echo $_SESSION['LName'];?> >
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" name="age_booking" value = <?php echo $age;?>>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email_booking" value = "<?php echo $_SESSION['Email'];?>" >
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Phone No.</label>
                                    <input type="text" class="form-control" name="Mobile_booking" value = "<?php echo $_SESSION['Mobile_Number'];?>">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address_booking" value = "<?php echo $_SESSION['Address'];?>">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country_booking" value = "<?php echo $_SESSION['Country'];?>">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Gender</label>
                                    <!-- <input type="text" class="form-control" name="country_booking"> -->
                                    <select name="gender">
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                    </select>
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

                                    <!-- <input type="text" class="form-control" name="country_booking"> -->
                                    <select name="parking" onchange="OnSelectionChange()">
                                       
                                       <?php 
                                       if ($_POST['car_limit'] > 0 &&  $_POST['bike_limit'] > 0)
                                       {
                                       ?>
                                       <option value="None">None</option>
                                       <option value="Car">Car</option>
                                       <option value="Bike">Bike</option>
                                       <?php 
                                       }
                                       else if($_POST['car_limit'] <= 0 &&  $_POST['bike_limit'] > 0)
                                       {
                                       ?>
                                       <option value="None">None</option>
                                       <option value="Bike">Bike</option>
                                          <?php
                                          } 
                                          else if($_POST['car_limit'] > 0 &&  $_POST['bike_limit'] <= 0)
                                          {
                                          ?>
                                          <option value="None">None</option>
                                          <option value="Car">Car</option>
                                          <?php
                                          }
                                          else
                                          {
                                             ?>
                                             <option value="NONE">NO PARKING SLOTS AVAILABLE</option>
                                             <?php
                                          }
                                          ?>
                                    <?php
                                       if(isset($_POST["parking"])){
                                          $country=$_POST["parking"];
                                          echo "select country is => ".$country;
                                       }
                                    ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Date Of Visit</label>
                                    <input type="text" readonly class="form-control" name="date_booking" value="<?php echo $_POST['date_of_visit'];?> ">
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
                        </form>
                        <!-- <div class="booking-content">
                           <div class="form-title">
                              <span>2</span>
                              <h3>Payment Information</h3>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group">
                                    <label>Name on Card Holder</label>
                                    <input type="text" class="form-control" name="firstname_booking">
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="row align-items-center">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Card number</label>
                                          <input type="text" id="card_number" name="card_number" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <img src="assets/images/cards.png" alt="Cards">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <label>Expiration Date</label>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <input type="text" id="expire_month" name="expire_month"
                                                   class="form-control" placeholder="MM">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <input type="text" id="expire_year" name="expire_year"
                                                   class="form-control" placeholder="Year">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Security Code</label>
                                          <div class="row">
                                             <div class="col-4">
                                                <div class="form-group">
                                                   <input type="text" id="cvv" name="cvv" class="form-control"
                                                      placeholder="CVV ">
                                                </div>
                                             </div>
                                             <div class="col-8">
                                                <img src="assets/images/icon_ccv.gif" alt="cvv"><small>Last 3
                                                   digits</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div> -->
                           <!-- </div> -->
                  
                        <!-- </div> -->
                                
                        <div class="form-policy">
                           <h3>Cancellation Policy</h3>
                           <div class="form-group">
                              <label class="checkbox-list">
                              I accept terms and conditions and general policy.
                              </label>
                           </div>
                          <input type="Submit" class="button-primary" value="Continue">                       </div>
                     </div>
                     <!-- step one form html end -->
                  </div>
                  <!-- <div class="col-lg-4">
                     <aside class="sidebar">
                        <div class="widget-bg widget-table-summary">
                           <h4 class="bg-title">Summary</h4>
                           <table>
                              <tbody>
                                 <tr>
                                    <td>
                                       <strong>Ticket Cost </strong>
                                    </td>
                                    <td class="text-right">
                                      <?php $t_price = $_SESSION['t_price']=$_POST['t_price'];?>
                                       <?php echo $_POST['t_price'].".00"; ?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>Parking Cost</strong>
                                    </td>
                                    <td class="text-right">
                                       <?php
                                          if($_POST['parking']=="Car")
                                          {
                                             echo $parking_cost = "100.00";

                                          }
                                          else if ($_POST['parking']=="Bike")
                                          {
                                             echo $parking_cost= "50.00";

                                          }
                                          else
                                          {
                                             echo $parking_cost=  "0.00";
                                          }
                                       ?>
                                    </td>
                                 </tr>
                                    <td>
                                       <strong>Tax</strong>
                                    </td>
                                    <td class="text-right">
                                       18%
                                    </td>
                                 </tr>
                                 <tr class="total">
                                    <td>
                                       <strong>Total cost</strong>
                                    </td>
                                    <td class="text-right">
                                       <strong><?php 
                                       $tax = ($t_price + $parking_cost) *'18%';
                                       echo $t_price + $parking_cost + $tax; ?>.00</strong>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="widget-bg widget-support-wrap">
                           <div class="icon">
                              <i class="fas fa-phone-volume"></i>
                           </div>
                           <div class="support-content">
                              <h5>HELP AND SUPPORT</h5>
                              <a href="telto:12345678" class="phone">+91 00000 00000</a>
                              <small>Monday to Sunday 9.00am - 7.30pm</small>
                           </div>
                        </div> -->
                     </aside>
                  </div>
               </div>
            </div>
         </div>
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