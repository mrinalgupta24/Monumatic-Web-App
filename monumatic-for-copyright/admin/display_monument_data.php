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

<div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="dashboard-box table-opp-color-box">
                            <div class="row">

<div class="col-lg-12">
<br>
    <div class="dashboard-box table-opp-color-box">
        <h4>MONUMENT DATA</h4>
        <p></p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                <th>Monument Name</th>

                        <th>City Name</th>
                        <th>Location</th>
                        <th>Page Title</th>

                        <th>PIO</th>
                        <th>NRI</th>
                        <th>Ticket Status</th>
                        <th>Ticket Booking Limit</th>
                        <th>Parking Booking Limit for 2 Wheelers</th>
                        <th>Parking Booking Limit for 4 Wheelers</th>
                    </tr>
                </thead>
                <?php

                   
require 'connection.php';
$query = "SELECT * FROM monuments_details" ;
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {


?>

<tr>
<td><span class="list-img"><?php echo $row['m_name'];?></span>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['location'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['PIO'];?></td>
<td><?php echo $row['NRI'];?></td>

<td><?php echo $row['ticket_status'];?></td>
<td><?php echo $row['ticket_limit'];?></td>
<td><?php echo $row['parking_limit'];?></td>
<td><?php echo $row['parking_limit_for_bikes'];?></td>


</tr>
<?php
}
}
?>

<?php 


?>

</tbody>
                                  </table>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
</div>
</div>

</body>

<?php
include "footer.php";
?>

</html>




