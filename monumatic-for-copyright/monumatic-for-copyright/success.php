<?php 
session_start();
$_SESSION['firstname_ticket_generation'] ;
date_default_timezone_set("Asia/Calcutta"); 

include_once 'config.php'; 
include_once 'dbConnect.php';
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$pid = $_SESSION['product_id']; 
 
if(isset($_GET['PayerID'])){ 

   ?>
   <?php
include "header.php";
?>
<?php
require 'connection.php';
$query = "SELECT * FROM Booking_Details ORDER BY Serial_Number";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {
 $serial_number = $row["Serial_Number"];
                                           
}
}
$new_serial = $serial_number +1;
$ticket_id = "MONUMATIC-TCKT-000".$new_serial;
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
                  <div class="success-notify">
                     <div class="success-icon">
                        <i class="fas fa-check"></i>
                     </div>
                     <div class="success-content">
                        <h3>PAYMENT CONFIRMED</h3>
                        <p>Thank you, your payment has been successful and your booking is now confirmed. A confirmation
                           email has been sent to Your Registered E-Mail ID</p>
                     </div>
                  </div>
                  <div class="confirmation-inner">
                     <div class="row">
                        <div class="col-lg-8 right-sidebar">
                           <div class="confirmation-details">
                              <h3>BOOKING DETAILS</h3>
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td>Booking id:</td>
                                       <td><?php echo $ticket_id ?></td>
                                    </tr>
                                    <tr>
                                       <td>First Name:</td>
                                       <td><?php echo $_SESSION['firstname_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Last Name:</td>
                                       <td><?php echo $_SESSION['lastname_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Age:</td>
                                       <td><?php echo $_SESSION['age_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Email:</td>
                                       <td><?php echo $_SESSION['email_ticket_generation'] ;?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Phone:</td>
                                       <td><?php echo $_SESSION['mobile_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Address:</td>
                                       <td><?php echo $_SESSION['address_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Country:</td>
                                       <td><?php echo $_SESSION['country_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Gender:</td>
                                       <td><?php echo $_SESSION['gender_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Nationality:</td>
                                       <td><?php echo $_SESSION['vistor_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Parking:</td>
                                       <td><?php echo $_SESSION['parking_ticket_generation'] ;?></td>
                                    </tr>
                                    <tr>
                                       <td>Booking Date</td>
                                       <td><?php echo $_SESSION['date_ticket_generation'] ;?></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <div class="details payment-details">
                                 <h3>PAYMENT</h3>
                                 <div class="details-desc">
                                    <p>Payment is successful via PayPal</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
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
                                          <?php echo "RS. ".$_SESSION['visit_price_ticket_generation'].".00" ;?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <strong>Parking</strong>
                                          </td>
                                          <td class="text-right">
                                          <?php echo "RS. ".$_SESSION['parking_cost_ticket_generation'];?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <strong>Taxes</strong>
                                          </td>
                                          <td class="text-right">
                                          <?php echo $_SESSION['gst_ticket_generation'] ;?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <strong>Tax</strong>
                                          </td>
                                          <td class="text-right">
                                             18%
                                          </td>
                                       </tr>
                                       <tr class="total">
                                          <td>
                                             <strong>Total Cost</strong>
                                          </td>
                                          <td class="text-right">
                                             <strong> <?php echo $_SESSION['total_ticket_generation'] ;?></strong>
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
                              </div>
                           </aside>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- step three form html end -->
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

include('phpqrcode/qrlib.php');
$name = $_SESSION['firstname_ticket_generation']." ".$_SESSION['lastname_ticket_generation'];

    $qrtext =  $ticket_id .$name.
    $_SESSION['age_ticket_generation'] .
    $_SESSION['gender_ticket_generation'] .
    $_SESSION['mobile_ticket_generation'] .
    $_SESSION['address_ticket_generation'] .
    $_SESSION['country_ticket_generation'] .
    $_SESSION['vistor_ticket_generation'] .
    $_SESSION['date_ticket_generation'].
    $_SESSION['monument_name_ticket_generation'];
    $qrtext1 =  $ticket_id .$name.
    $_SESSION['parking_ticket_generation'] .
    $_SESSION['date_ticket_generation'].
    $_SESSION['monument_name_ticket_generation'];
$path = 'qr-images/';
$file =  $ticket_id."-M-Ticket" . ".png";
$file1 =  $ticket_id."-P-Ticket" . ".png";

$ecc = 'L';
$pixel_size = 10;
$frame_size = 10;
$file = 'qr-images/' . $ticket_id."-M-Ticket" . ".png";
$file1 = 'qr-images/' . $ticket_id."-P-Ticket" . ".png";

$ecc = 'L';
$pixel_size = 10;
$frame_size = 10;
QRcode::png($qrtext, $file, $ecc, $pixel_size, $frame_size);
QRcode::png($qrtext1, $file1, $ecc, $pixel_size, $frame_size);

// echo "<center><img src='".."'></center>";


?>

<?php
include('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('assets/images/header_logo_monumatic.jpg', 15, 15, 175, 40,);
$pdf->SetFont("Arial", "", 14);
$pdf->Cell(0, 50, "", 1, 1, 'C');
$pdf->Cell(0, 10, "TAX INVOICE", 1, 1, 'C');
$pdf->Cell(95, 10, "SELLER", 1, 0, 'C');
$pdf->Cell(95, 10, "BUYER", 1, 1, 'C');
$date = date("d/m/Y");
$pdf->Cell(95, 10, "DATE : $date", 1, 0, 'C');
$pdf->Cell(95, 10, "", 1, 1, 'C');
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(95, 10, "MONUMATIC", 'TL', 0, 'L');
$pdf->Cell(95, 10, "$name", 'TRL', 1, 'L');
$pdf->Cell(95, 10, "rechus@monumatic.tech", 'RL', 0, 'L');
$pdf->Cell(95, 10, $_SESSION['email_ticket_generation'], 'RL', 1, 'L');
$pdf->Cell(95, 10, "+91 000 000 0000", 'RL', 0, 'L');
$pdf->Cell(95, 10, $_SESSION['mobile_ticket_generation'], 'RL', 1, 'L');
$pdf->Cell(95, 10, "JIMS VK NEW DELHI", 'BRL', 0, 'L');
$pdf->Cell(95, 10, $_SESSION['address_ticket_generation'],'BRL',0 , 'L');
$pdf->Cell(0, 10, " ", 1, 1, 'C');
$pdf->SetFont("Arial", "", 14);

$pdf->Cell(0, 20, "DETAILS", 1, 1, 'C');
$pdf->SetFont("Arial", "", 12);

$pdf->Cell(70, 10, "MONUMENT NAME", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['monument_name_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "TICKET PRICE", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['visit_price_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "PARKING PRICE", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['parking_cost_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "GST", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['gst_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "TOTAL COST", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['total_ticket_generation'] , 1, 1, 'C');
//
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(95, 10, "MONUMATIC", 'TL', 0, 'L');
$pdf->Cell(95, 10, "FOR MONUMATIC", 'TRL', 1, 'L');
$pdf->Cell(95, 10, "rechus@monumatic.tech", 'RL', 0, 'L');
$pdf->Cell(95, 10, "", 'RL', 1, 'L');
$pdf->Cell(95, 10, "+91 000 000 0000", 'BRL', 0, 'L');
$pdf->Cell(95, 10, "AUTHORISED SIGNATORY", 'BRL', 1, 'L');
$pdf->Cell(0, 10, "We declare that this invoice shows the actual price of
the goods described and that all particulars are true and
correct.", 1, 1, 'L');
$pdf->Cell(0, 10, "****** This is a System Generated INVOICE Signature not Required ******'", 1, 1, 'C');
$pdf->Cell(0, 10, "****** SUBJECT TO DELHI JURISDICTION ******'", 1, 1, 'C');




$pdf->AddPage();
$pdf->Image('assets/images/header_logo_monumatic.jpg', 15, 15, 175, 40,);
$pdf->SetFont("Arial", "", 14);
$pdf->Cell(0, 50, "", 1, 1, 'C');
$pdf->Cell(0, 20, "MONUMENT TICKET", 1, 1, 'C');
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(70, 10, "Ticket ID ", 1, 0, 'C');
$pdf->Cell(0, 10, $ticket_id , 1, 1, 'C');
$pdf->Cell(70, 10, "Monument Name", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['monument_name_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Visitor Name", 1, 0, 'C');
$pdf->Cell(0, 10, $name , 1, 1, 'C');
$pdf->Cell(70, 10, "Visitor Type", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['vistor_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Gender", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['gender_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Booking For Date :", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['date_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Age :", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['age_ticket_generation'] , 1, 1, 'C');
$pdf->Image($file, 60, 155, 90, 90,);
$pdf->Cell(0, 90, "", 1, 1, 'C');
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 10, "We declare that this Ticket shows the actual details as entered by the user and that all particulars are true and
correct.", 1, 1, 'L');
$pdf->Cell(0, 10, "****** This is a System Generated TICKET Signature not Required ******'", 1, 1, 'C');
$pdf->Cell(0, 10, "****** SUBJECT TO DELHI JURISDICTION ******'", 1, 1, 'C');
// $cust_parking =  $_GET['9'];
// $pdf->Cell(70, 10, "PARKING", 1, 0, 'C');
// $pdf->Cell(0, 10, $cust_parking, 1, 1, 'C');
// $file =  $_GET['10'];
// $pdf->Cell(0, 110, "", 1, 0, 'C');
if ($_SESSION['parking_ticket_generation']=="None" || $_SESSION['parking_ticket_generation'] == "NO PARKING SLOTS AVAILABLE" || $_SESSION['parking_ticket_generation'] == "NONE")
{

}
else
{
$pdf->AddPage();
$pdf->Image('assets/images/header_logo_monumatic.jpg', 15, 15, 175, 40,);
$pdf->SetFont("Arial", "", 14);
$pdf->Cell(0, 50, "", 1, 1, 'C');
$pdf->Cell(0, 20, "PARKING TICKET", 1, 1, 'C');
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(70, 10, "Ticket ID ", 1, 0, 'C');
$pdf->Cell(0, 10, $ticket_id , 1, 1, 'C');
$pdf->Cell(70, 10, "Monument Name", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['monument_name_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Visitor Name", 1, 0, 'C');
$pdf->Cell(0, 10, $name , 1, 1, 'C');
$pdf->Cell(70, 10, "Visitor Type", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['vistor_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Gender", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['gender_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Booking For Date :", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['date_ticket_generation'] , 1, 1, 'C');
$pdf->Cell(70, 10, "Parking :", 1, 0, 'C');
$pdf->Cell(0, 10, $_SESSION['parking_ticket_generation'] , 1, 1, 'C');
$pdf->Image($file1, 60, 155, 90, 90,);
$pdf->Cell(0, 90, "", 1, 1, 'C');
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 10, "We declare that this Ticket shows the actual details as entered by the user and that all particulars are true and
correct.", 1, 1, 'L');
$pdf->Cell(0, 10, "****** This is a System Generated TICKET Signature not Required ******'", 1, 1, 'C');
$pdf->Cell(0, 10, "****** SUBJECT TO DELHI JURISDICTION ******'", 1, 1, 'C');
}

 
	
	$file = 'TcktPdf/' . "$ticket_id"."-".uniqid(). ".pdf";

   $pdf->Output($file,'F');
?>
<?php
 



?>

<?php 


$mail=new PHPMailer(true); // Passing `true` enables exceptions

try {
    //settings
   // $mail->SMTPDebug=2; // Enable verbose debug output
  // $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='shubham.monumatic@gmail.com'; // SMTP username
    $mail->Password='hbqcrrpopwzemvax'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('no-reply@monumatic.tech', 'Monumatic');

    //recipient
    $mail->addAddress($_SESSION['email_ticket_generation']);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Please find attached ticket for your booking for ticket id :'.$ticket_id;

	$mail->Body='Dear'.$cust_name;

	$mail->Body='Please Find Attached ticket for your visit<br/><br/><br/><br/>Thanks for Booking the Ticket through Monumatic<br/><br/><br/>This email and any files transmitted with it are confidential and intended solely for the use of the individual or entity to whom they are addressed. If you have received this email in error please notify the system manager. This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. If you are not the intended recipient you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited . The information contained in this mail is propriety and strictly confidential.<br/><br/><br/>Monumatic &copy; all right reserved';

	$mail->AddAttachment($file, '', $encoding = 'base64', $type = 'application/pdf');

    $mail->send();

} 
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
}
//if (header('Refresh: 1; URL=http://127.0.0.1/Monumatic/Home.php')) {}

?>


<?php
    $m_name = $_SESSION['monument_name_ticket_generation'];
    $name = $_SESSION['firstname_ticket_generation'].$_SESSION['lastname_ticket_generation'];
    $age = $_SESSION['age_ticket_generation'] ;
    $email = $_SESSION['email_ticket_generation'] ;
    $mobile = $_SESSION['mobile_ticket_generation'];
    $address = $_SESSION['address_ticket_generation'] ;
    $gender =  $_SESSION['gender_ticket_generation'] ;
    $tprice = $_SESSION['visit_price_ticket_generation'];
    $country = $_SESSION['country_ticket_generation'];
    $visitor = $_SESSION['vistor_ticket_generation'] ;
    $parking = $_SESSION['parking_ticket_generation'] ;
    $datebooking = $_SESSION['date_ticket_generation'];
    $parkingprice = $_SESSION['parking_cost_ticket_generation'] ;
    $gst = $_SESSION['gst_ticket_generation'] ;
    $totalprice = $gst + $parkingprice +$tprice;
    $ticket_id;
require 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("h:i:s");
$cust_id = $_SESSION["User_Id"];
if ($sql = "INSERT INTO `Booking_Details`( `Ticket_id`, `Customer_ID`, `Monument_Name`, `visitor_name`, `visitor_age`, `visitor_email`, `visitor_mobile`, `visitor_address`, `visitor_country`, `visitor_gender`, `visitor_nationality`, `parking`, `Booking_Date`, `ticket_price`, `parking_price`, `gst`, `grand_total`, `Ticket_Status`, `Visitor_Status`, `qr_string`, `ticket_pdf`) VALUES ('$ticket_id','$cust_id','$m_name','$name','$age','$email','$mobile','$address','$country','$gender','$visitor','$parking','$datebooking','$tprice','$parkingprice','$gst','$totalprice','Active','TRIP NOT STARTED','$qrtext','$file')") {
// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
mysqli_query($conn, $sql);
  $msg= 'successfull';
    }


    ?>
<?php
require 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("h:i:s");
$cust_id = $_SESSION["User_Id"];
if ($sql = "INSERT INTO `Parking_Details`(`Ticket_ID`, `Customer_ID`, `Monument_Name`, `Booking_Date`, `Vehicle_Class`, `ticket_status`, `visitor_status`, `qr_string`, `ticket_pdf`) VALUES ('$ticket_id','$cust_id','$m_name','$date','$parking','Active','NOT STARTED','$qrtext1','$file1')") {
// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
mysqli_query($conn, $sql);
 $msg= 'successfull';
 
    }


    ?>
<script> 
 setTimeout(function () {    
     window.location.href = 'user_profile.php'; 
},1000); // 5 seconds

</script>











<?php
include "footer.php";
?>

</html>
   <?php
}
else{
    echo "<h1>Your Payment has been failed</h1>";
  ?>
    <a href="index.php">Back to Home</a>
<?php 
}
//session_destroy();
?>
