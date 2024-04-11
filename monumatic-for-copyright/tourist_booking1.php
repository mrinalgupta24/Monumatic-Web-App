
<?php
include "header.php";
session_start();
// $_SESSION["Serial_Number"] ;
//  $_SESSION["User_Id"];
//  $_SESSION["Name"];
//  $_SESSION["Mobile_Number"];
//  $_SESSION["Address"];
//  $_SESSION["Country"];
//  $_SESSION["Date_Of_Birth"];
//  $_SESSION["Govt_Id_Path"];
//  $_SESSION["Username"];
//  $_SESSION["Email"];
//  $_SESSION["Password"];
//  $_SESSION["Date_Of_Creation"];
//  $_SESSION["Date_Of_Updation"];
//  $_SESSION["Verification_status"];
//  $_SESSION["Account_Status"];
//  $_SESSION["Comments"];
// echo isset($_SESSION['Email']) ;
//echo session_id();
if (isset($_SESSION['Email']) == 1 && isset($_SESSION['User_Id']) == 1) {
   // echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
} else {
   $script = "<script> window.location = 'admin/user_login.php';</script>";
   echo $script;
}
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
                     Your Bookings
                     <a href="#" class="step-icon"></a>
                  </div>
                  <div class="step-item">
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
               <!-- step one form html start -->
               <div class="cart-list-inner">
                  <form action="tourist_booking2.php" method="post">
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Monument Name</th>
                                 <th>Enter Date Of Visit</th>
                                 <th>Visitor Type</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                              
                                 <td data-column="Monument Name"><?php echo $_GET['varname'];?></td>
                                 <?php 
                              $date = new DateTime($postedDate);

                              $date->modify('+20 day');
                              
                             
                                 ?>
                            <script>
const picker = document.getElementById('date1');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([5,0].includes(day)){
    e.preventDefault();
    this.value = '';
    alert('Sunday not allowed');
  }
});
</script>
                                 <td style="white-space: normal; width:400px;"><input type="date" required name="date_of_visit" id="date1" min="<?php echo date("Y-m-d"); ?>" max="<?php  echo $date->format('Y-m-d');?>" style="white-space: normal; width:200px;"></td>        
                                 <td> 
                                    <select name="visitor_type" required>
                                       <option value= "PIO"> INDIAN RESIDENT </option>
                                       <option value= "NRI"> FOREIGN NATIONAL </option>
                                    </select>
                                 </td>                          
                              </tr>
                              </tbody>

                        </table>
                     </div>
                     <div class="checkBtnArea text-right">
                     <input type="hidden" name="monument_name" value="<?php echo $_GET['varname'];?>"style="white-space: normal; width:200px;">
                        <input type="Submit" value="Check Available Slots">
                     </div>
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