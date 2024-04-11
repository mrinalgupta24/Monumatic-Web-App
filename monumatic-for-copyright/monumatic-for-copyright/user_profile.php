<?php
include "header.php";
session_start();

// echo $_SESSION["User_Id"];
// echo $_SESSION["Serial_Number"] ;
// echo $_SESSION["Name"];
// echo $_SESSION["Mobile_Number"];
// echo $_SESSION["Address"];
// echo $_SESSION["Country"];
// echo $_SESSION["Date_Of_Birth"];
// echo $_SESSION["Govt_Id_Path"];
// echo $_SESSION["Username"];
// echo $_SESSION["Email"];
// echo $_SESSION["Password"];
// echo $_SESSION["Date_Of_Creation"];
// echo $_SESSION["Date_Of_Updation"];
// echo $_SESSION["Verification_status"];
// echo $_SESSION["Account_Status"];
// echo $_SESSION["Comments"];

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
                  <h1 class="inner-title">USER PROFILE </h1>
                  <br>
                  <h1 class="inner-title">Welcome, <?php echo $_SESSION['Name'];?></h1>
                  </div>
               </div>
            </div>
            <div class="inner-shape"></div>
         </section>
         <!-- Inner Banner html end-->
         <div class="step-section cart-section">
            <div class="container">
               <!-- step three form html start -->
               <div class="confirmation-outer">
                  <div class="confirmation-inner">
                     <div class="row">
                        <div class="col-lg-12 right-sidebar">
                           <div class="confirmation-details">
                              <h3>USER DETAILS</h3>
                              <table class="table">
<!-- // echo $_SESSION["User_Id"];
// echo $_SESSION["Serial_Number"] ;
// echo $_SESSION["Name"];
// echo $_SESSION["Mobile_Number"];
// echo $_SESSION["Address"];
// echo $_SESSION["Country"];
// echo $_SESSION["Date_Of_Birth"];
// echo $_SESSION["Govt_Id_Path"];
// echo $_SESSION["Username"];
// echo $_SESSION["Email"];
// echo $_SESSION["Password"];
// echo $_SESSION["Date_Of_Creation"];
// echo $_SESSION["Date_Of_Updation"];
// echo $_SESSION["Verification_status"];
// echo $_SESSION["Account_Status"];
// echo $_SESSION["Comments"]; -->

                                 <tbody>
                                    <tr>
                                       <td>USER ID </td>
                                       <td><?php echo $_SESSION["User_Id"];?> </td>
                                    </tr>
                                    <tr>
                                       <td>NAME</td>
                                       <td><?php echo $_SESSION["Name"];?></td>
                                    </tr>
                                    <tr>
                                       <td>MOBILE NUMBER</td>
                                       <td><?php echo $_SESSION["Mobile_Number"];?></td>
                                    </tr>
                                    <tr>
                                       <td>ADDRESS</td>
                                       <td><?php echo $_SESSION["Address"];?></td>
                                    </tr>
                                    <tr>
                                       <td>COUNTRY</td>
                                       <td><?php echo $_SESSION["Country"];?></td>
                                    </tr>
                                    <tr>
                                       <td>DATE OF BIRTH</td>
                                       <td><?php echo $_SESSION["Date_Of_Birth"];?></td>
                                    </tr>
                                    <tr>
                                       <td>GOVT ID PROOF</td>
                                       <td><a href="admin/<?php echo $_SESSION["Govt_Id_Path"]?>" target="_blank">Click Here to View ID Proof </a></td>
                                    </tr>
                                    <tr>
                                       <td>USERNAME</td>
                                       <td><?php echo $_SESSION["Username"];?></td>
                                    </tr>
                                    <tr>
                                       <td>EMAIL</td>
                                       <td><?php echo $_SESSION["Email"];?></td>
                                    </tr>
                                    <tr>
                                       <td>DATE OF CREATION</td>
                                       <td><?php echo $_SESSION["Date_Of_Creation"];?> </td>
                                    </tr>
                                    <tr>
                                       <td>DATE OF UPDATION</td>
                                       <td><?php echo $_SESSION["Date_Of_Updation"]; ?></td>
                                    </tr>
                                    <tr>
                                       <td>ACCOUNT IP ADDRESS</td>
                                       <td><?php echo $_SESSION["Ip_address"]; ?></td>
                                    </tr>
                                    <tr>
                                       <td>ACCOUNT VERIFICATION STATUS</td>
                                       <td><?php echo $_SESSION["Verification_status"]; ?></td>
                                    </tr>
                                    <tr>
                                       <td>ACCOUNT STATUS</td>
                                       <td><?php echo $_SESSION["Account_Status"]; ?></td>
                                    </tr>
                                    <tr>
                                       <td>COMMENTS</td>
                                       <td><?php echo $_SESSION["Comments"]; ?></td>
                                    </tr>
                              </table>
                           </div>
                          <center> <form action="admin/user_account_delete.php">
                                 <input type="submit" style="background-color:red;"class="button-text" value="DELETE ACCOUNT">
                        </center></form>

                        </div>
                     </div>
                  </div>
               </div>
               <!-- step three form html end -->
            </div>
         </div>

         <div class="step-section cart-section">
            <div class="container">
               <!-- step three form html start -->
               <div class="confirmation-outer">
                  <div class="confirmation-inner">
                     <div class="row">
                        <div class="col-lg-12 right-sidebar">
                           <div class="confirmation-details">
                              <h3>Booking Details</h3>
                              <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Cutsomer ID</th>
                                            <th>Ticket ID</th>
                                            <th>Monument Name</th>
                                            <th>Parking</th>
                                            <th>Booking Date</th>
                                            <th>Total Amount Paid</th>
                                            <th>Ticket Status</th>
                                            <th>Visitor Status</th>
                                            <th>View Ticket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                       $user = $_SESSION["User_Id"];
                                         require 'connection.php';
                                         $query = "SELECT * FROM Booking_Details WHERE Customer_ID ='$user'ORDER BY Serial_Number DESC" ;
                                         $query_run = mysqli_query($conn, $query);
                                         if (mysqli_num_rows($query_run) > 0) {
                                         foreach ($query_run as $row) {
                                              
                            
                                        ?>

                                        <tr>
                                            <td><span class="list-img"><?php echo $row['Customer_ID'];?></span>
                                            </td>
                                            <td><a href="#"><span class="list-name"> <?php echo $row['Ticket_id'];?></span></a>
                                            </td>
                                            <td><?php echo $row['Monument_Name'];?></td>
                                            <td><?php echo $row['parking'];?></td>
                                            <td>
                                                <span class="badge"><?php echo $row['Booking_Date'];?></span>
                                            </td>
                                            <td>
                                                <span class="badge"><?php echo $row['grand_total'];?></span>
                                            </td>
                                            <td>
                                                <span class="badge"><?php echo $row['Ticket_Status'];?></i></span>
                                            </td>
                                            <td>
                                                <span class="badge "><?php echo $row['Visitor_Status'];?></i></span>
                                            </td>
                                            <td>
                                                <span class=""><a href=" <?php echo $row['ticket_pdf'];?>" target="_blank"><span class="list-name"> View Ticket</span></a></i></span>
                                            </td>
                                        </tr>
                                        <?php
                              }
                           }
                           ?>

                                    </tbody>

                                </table>
                            </div>
                            <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
         echo  "<script> alert('Kindly Raise a Support Ticket on Helpdesk to CANCEL YOUR BOOKING'); </script>";
      }
        function button2() {
            echo "This is Button2 that is selected";
        }
    ?>
 <center>
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Manage Booking" />
    </form>
 </center>
                        </div>
                    </div>  
                </div>
            </div>
</div>
</div>

<!-- echo  "<script> alert('Kindly Raise a Support Ticket on Helpdesk to CANCEL YOUR BOOKING'); </script>"; -->
                           </div>
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
include "footer.php";
?>

</html>