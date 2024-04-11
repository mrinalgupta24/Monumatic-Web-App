<?php session_start(); ?>
<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/db-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 09:12:56 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="../assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Monumatic | Admin Panel</title>
      <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "h7ilpnqa3l");
</script>
</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
            <div class="dashboard-header sticky-header">
                <div class="content-left  logo-section pull-left">
                    <h1><a href="../index-2.html"><img src="assets/images/header_logo_monumatic.png" alt="" style="width: 200px;"></a></h1>
                </div>
                <div class="heaer-content-right pull-right">
                   
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                                <img src="assets/images/profile.jpg" alt="">
                                <span> <?php echo $_SESSION['name']?> </span>
                            </div>
                        </a>
                    </div>

                    
                </div>
                
            </div>
            <div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li><a href="dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a><i class="fas fa-user"></i>Monument Management</a>
                            <ul>
                                <li>
                                    <a href="add_monument_city.php">Add Monument City</a>
                                </li>
                                <li>
                                    <a href="update_monument_city.php">Update Monument City Status</a>
                                </li>
                                <li>
                                    <a href="add_monument.php">Add Monument</a>
                                </li>
                                <li>
                                    <a href="update_monument.php">Update Monument Status</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li><a><i class="fas fa-user"></i>User Management</a>
                            <ul>
                                <li>
                                    <a href="display-admin-user.php">Admin Users List</a>
                                </li>
                                <li>
                                    <a href="display-normal-user.php">Normal Users List</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        <li><a><i class="fas fa-user"></i>Booking Management</a>
                            <ul>
                            <li>
                                    <a href="display_booking.php">Booking Details</a>
                                </li>              
                                <li>
                                    <a href="delete_booking.php">Cancel Booking</a>
                                </li>                        
                            </ul>
                        </li>
                        <li><a><i class="fas fa-user"></i>Entry & Exit Management</a>
                            <ul>
                                <li>
                                    <a href="entry.php">Mark Entry for Monuments</a>
                                </li>              
                                <li>
                                    <a href="exit.php">Mark Exit for Monuments</a>
                                </li>           
                                <li>
                                    <a href="entry_parking.php">Mark Entry for Parking</a>
                                </li>              
                                <li>
                                    <a href="exit_parking.php">Mark Exit for Parking</a>
                                </li>                      
                            </ul>
                        </li>
                        <li><a><i class="fas fa-user"></i>REPORTS</a>
                            <ul>
                                <li>
                                    <a href="display_booking_report.php">Booking Report</a>
                                </li>              
                                <li>
                                    <a href="display_entry_exit_report.php">Entry Exit Report</a>
                                </li>           
                                <li>
                                    <a href="display_entry_exit_report_parking.php">Entry Exit Report For Parking</a>
                                </li>              
                                <li>
                                    <a href="display_city_data.php">City Data</a>
                                </li>    
                                <li>
                                    <a href="display_monument_data.php">Monument Data</a>
                                </li>                  
                            </ul>
                        </li>
                       

                        <li><a href="statuspage.php"><i class="fas fa-sign-out-alt"></i> Status Page</a></li>
                        <li><a href="https://clarity.microsoft.com/projects" target="_blank"><i class="fas fa-sign-out-alt"></i> Microsoft Clarity</a></li>

                        <li><a href="admin_account_delete.php"><i class="fas fa-sign-out-alt"></i>Account Delete</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                       

                    </ul>
                </div>
            </div>
           
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/db-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 09:12:56 GMT -->
</html>