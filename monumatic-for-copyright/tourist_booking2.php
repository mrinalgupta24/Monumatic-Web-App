
<?php
include "header2.php";
$Booking_Date = $_POST['date_of_visit'];
//echo
$monument_name = $_POST['monument_name'];
?>

<?php
require 'connection.php';
$count =0;
$query = "SELECT * FROM Booking_Details WHERE Monument_Name ='$monument_name' AND Booking_Date ='$Booking_Date'";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
   foreach ($query_run as $row) {
?>
<?php
  $row["Monument_Name"];
    $count ++;                                                   
?>

<?php
}
}
 $count;
?>


<?php
include "header2.php";
$Booking_Date = $_POST['date_of_visit'];
//echo
$monument_name = $_POST['monument_name'];
?>

<?php
require 'connection.php';
$count_for_parking_bike =0;
$query = "SELECT * FROM Parking_Details WHERE Monument_Name ='$monument_name' AND Booking_Date ='$Booking_Date' AND Vehicle_Class = 'BIKE'";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
   foreach ($query_run as $row) {
?>
<?php
  $row["Monument_Name"];
    $count_for_parking_bike ++;                                                   
?>

<?php
}
}
 $count_for_parking_bike;
?>


<?php
require 'connection.php';
$count_for_parking_car =0;
$query = "SELECT * FROM Parking_Details WHERE Monument_Name ='$monument_name' AND Booking_Date ='$Booking_Date' AND Vehicle_Class = 'CAR'";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
   foreach ($query_run as $row) {
?>
<?php
  $row["Monument_Name"];
    $count_for_parking_car ++;                                                   
?>

<?php
}
}
 $count_for_parking_car;
?>
<?php
include "header2.php";
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
         <div class="step-section cart-section">
            <div class="container">
               <div class="step-link-wrap">
               <div class="step-item">
                     Your Bookings
                     <a href="#" class="step-icon"></a>
                  </div>
                  <div class="step-item active">
                     Your Bookings
                     <a href="#" class="step-icon"></a>
                  </div>
                  <div class="step-item">
                     Your Details
                     <a href="#" class="step-icon"></a>
                  </div>
                  <div class="step-item">
                     Finish
                     <a href="#" class="step-icon"></a>
                  </div>
               </div>
            <?php
            require 'connection.php';
            $query = "SELECT * FROM monuments_details where m_name='$monument_name'";
            $query_run = mysqli_query($conn, $query);
            ?>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
            ?>
               <!-- step one form html start -->
               <div class="cart-list-inner">
                  <form action="tourist_booking3.php" method="POST">
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Monument Name</th>
                                 <th>Date Of Visit</th>
                                 <th>Price</th>
                                 <th>Free Slots Available For Ticket Booking </th>
                                 <th>Free Slots Available For Parking Booking [ BIKE / TWO WHEELER ] </th>
                                 <th>Free Slots Available For Parking Booking [ CAR / FOUR WHEELER ] </th>
                                 <th>Unit</th>
                                 <th>Bike Parking</th>
                                 <th>Car Parking</th>
                                 <!-- <th>Sub Total</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              if ($_POST['visitor_type'] ==="PIO")
                              {
                                 $price = $row['PIO'];
                              } 
                              else 
                              {
                                 $price = $row['NRI'];
                              }
                              $free_ticket_slots = $row['ticket_limit']-$count;
                              $free_ticket_slots_for_bike = $row['parking_limit_for_bikes']-$count_for_parking_bike;
                              $free_ticket_slots_for_car = $row['parking_limit']-$count_for_parking_car;
                              $updatedprice = $price ;
                              $gst = $updatedprice * '.18' ;
                              $grand_total = $updatedprice + $gst;
                        
                           
                              ?>

                              <tr>
                                 <td data-column="Monument Name"><?php echo $_POST['monument_name']; ?></td>
                                 <td data-column="Monument Name"><?php echo $_POST['date_of_visit']; ?></td>
                                 <td data-column="Monument Name"><?php echo $price ?></td>
                                 <td data-column="Price"><?php echo  "$free_ticket_slots" ; ?></td>
                                 <td data-column="Price"><?php echo  "$free_ticket_slots_for_bike" ; ?></td>
                                 <td data-column="Quantity"><?php echo  "$free_ticket_slots_for_car" ; ?></td>
                                 <td data-column="Sub Total">1 Person </td>
                                 <td data-column="Sub Total">50.00 </td>
                                 <td data-column="Sub Total">100.00 </td>
                                 <!-- <td data-column="Sub Total"><?php echo  "$updatedprice".".00"  ; ?> </td> -->

                              </tr>
                           </tbody>

                        </table>
                     </div>

                     <?php
                              }
                           }
                           ?>
                     <!-- <div class="updateArea">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="I have a coupon">
                           <a href="#" class="outline-primary">apply coupon</a>
                        </div>
                     </div> -->
                     <!-- <div class="totalAmountArea">
                        <ul class="list-unstyled">
                        <li><strong>SUB TOTAL</strong> <span><?php echo  "$updatedprice".".00"  ; ?></span></li>
                           <li><strong>TAXES [ GST ]</strong> <span><?php echo  "$gst"  ; ?></span></li>
                           <li><strong>GRAND TOTAL</strong> <span class="grandTotal"><?php echo  "$grand_total"  ; ?></span></li>
                        </ul>
                     </div> -->
                     <?php
                     if ($free_ticket_slots == '0')
                     {                            

                        echo '<script> alert("Oh No!!! No slots available for the selected Date")</script>';
                        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                       // echo '<a target="_blank" href='$url'>back</a>';
                        ?>
                          <div class="checkBtnArea text-right">
      
                        <a href="<?php echo $url ?>" class="button-primary">GO Back</a>
                     </div>
                        <?php
                     }
                     else
                     {
                        ?>
                     <div class="checkBtnArea text-right">
                     <input type="hidden" name ="t_price" value="<?php echo $updatedprice ;?>">
                     <input type="hidden" name ="m_name" value="<?php echo $_POST['monument_name']; ?>">
                     <input type="hidden" name ="gst" value="<?php echo $gst ;?>">
                     <input type="hidden" name ="grand_total" value="<?php echo $grand_total ;?>">
                     <input type="hidden" name ="car_limit" value="<?php echo $free_ticket_slots_for_car ;?>">
                     <input type="hidden" name ="bike_limit" value="<?php echo $free_ticket_slots_for_bike ;?>">
                     <input type="hidden" name ="visitor_type" value="<?php echo $_POST['visitor_type'] ;?>">
                     <input type="hidden" name ="date_of_visit" value="<?php echo $_POST['date_of_visit'] ;?>">

                     <input type="submit" class="button-primary" value="Checkout">
                     </div>
                     <?php
                     }
                     ?>
                  </form>
               </div>
               <!-- step one form html end -->
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
                  </div>
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



</html>
<?php
include "footer.php";
?>