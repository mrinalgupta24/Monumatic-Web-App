<?php
include "header.php";
session_start();
if (isset($_SESSION['Email']) == 1 && isset($_SESSION['User_Id']) == 1) {
    // echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
 } else {
    $script = "<script> window.location = 'index.php';</script>";
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
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Monumatic </title>
</head>

<body>
    

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">

            <div class="db-info-wrap">
                <div class="row">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="far fa-chart-bar"></i>
                            </div>
                           
                           <?php $count = 0 ;   require 'connection.php';
$query = "SELECT * FROM Normal_User ORDER BY Serial_Number DESC" ;
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {
    $price = $row['Serial_Number'];
    (float)$count++ ;
}
}
    ?>
                            <div class="dashboard-stat-content">
                                <h4>No. Of Registered Users</h4>
                                <h5><?php echo $count ;?></h5>
                            </div>
                        </div>
                    </div>
                    <?php    
require 'connection.php';
$query = "SELECT * FROM Booking_Details ORDER BY Serial_Number DESC" ;
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {
    $price = (float)$row['grand_total'];
    (float)$price1  = $price1 + $price;
}
}
?>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class="fas fa-dollar-sign"></i>
                            
                            </div>
                      
                            <div class="dashboard-stat-content">
                                <h4>Total Ticket Earnings (Till Date)</h4>
                                <h5><?php echo $price1 ;?></h5>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class="fas fa-users"></i>
                            </div>
                            <?php $count1 = 0 ;   require 'connection.php';
$query = "SELECT * FROM Admin_User ORDER BY Serial_Number DESC" ;
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {
    $price = $row['Serial_Number'];
    (float)$count1++ ;
}
}
    ?>
                            <div class="dashboard-stat-content">
                                <h4>Registered Admin Users</h4>
                                <h5><?php echo $count1 ;?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <?php $count2 = 0 ;   require 'connection.php';
$query = "SELECT * FROM Booking_Details ORDER BY Serial_Number DESC" ;
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {
    $price = $row['Serial_Number'];
    (float)$count2++ ;
}
}
?>
                            <div class="dashboard-stat-content">
                                <h4>Total Bookings Made Through Us</h4>
                                <h5><?php echo $count2 ;?></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        


                        <div class="dashboard-box table-opp-color-box">
                            <h4>Recent Booking</h4>
                            <p></p>
                            <div class="table-responsive">
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
                                    <?php

                                       
require 'connection.php';
$query = "SELECT * FROM Booking_Details ORDER BY Serial_Number DESC" ;
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
       <span class=""><a href=" ../<?php echo $row['ticket_pdf'];?>" target="_blank"><span class="list-name"> View Ticket</span></a></i></span>
   </td>
</tr>
<?php
}
}
?>

</tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>Latest Registered Users</h4>
                            <p></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Date Of Creation</th>
                                            <th>Verification Status</th>
                                            <th>Account_Status</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                       
require 'connection.php';
$query = "SELECT * FROM Normal_User ORDER BY Serial_Number Desc" ;
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {
     

?>

<tr>
   <td><span class="list-img"><?php echo $row['User_Id'];?></span>
   </td>
   <td><a href="#"><span class="list-name"> <?php echo $row['First_Name']." ".$row['Last_Name'];?></span></a>
   </td>
   <td><?php echo $row['Mobile_Number'];?></td>
   <td><?php echo $row['Username'];?></td>
   <td>
       <span class="badge"><?php echo $row['Email'];?></span>
   </td>
   <td>
       <span class="badge"><?php echo $row['Date_Of_Creation'];?></span>
   </td>
   <td>
       <span class="badge"><?php echo $row['Verification_status'];?></i></span>
   </td>
   <td>
       <span class="badge "><?php echo $row['Account_Status'];?></i></span>
   </td>
   <td>
       <span class=""><?php echo $row['Comments'];?></i></span>
   </td>
</tr>
<?php
}
}
?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Content / End -->
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <!-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script> -->
</body>

<?php
include "footer.php";
?>

</html>