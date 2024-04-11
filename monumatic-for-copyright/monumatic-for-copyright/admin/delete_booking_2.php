<?php
include "header.php";
echo $_POST['tid'];
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
                        <div class="dashboard-box user-form-wrap">
                            <h4>Delete Booking</h4>
                            <form class="form-horizontal" action="delete_booking_3.php" method="post">
                                <div class="row">
                                     <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select Ticket</label>
                                            <select name="tid" readonly>

                                            
                                                <option value="<?php echo $_POST['tid'];
                                                        // The value we usually set is the primary key
                                                ?>" > <?php echo $_POST['tid'];
                                                        // The value we usually set is the primary key
                                                ?>
                                          

                                            </select>

                                            
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

             $tid = $_POST['tid'];      
require 'connection.php';
$query = "SELECT * FROM Booking_Details WHERE  `Ticket_id`='$tid'" ;
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
<input type="hidden" name="tid" value="<?php echo $tid ;?>">
   <button type="submit"  name="submit" value="Upload"class="button-primary">DELETE BOOKING</button>
  </form>
  </div>
 </div>
    </div>
  </div>
</body>

<?php
include "footer.php";
?>

</html>





