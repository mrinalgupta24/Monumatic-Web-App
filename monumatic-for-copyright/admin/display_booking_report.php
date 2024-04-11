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
    
<form action=" " method="POST">
<br>
<label>Select Monument</label>
<select name="m_name">
<option value="--select--"> --select--</option>


<?php
require 'connection.php';
$query = "SELECT DISTINCT m_name FROM monuments_details";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
foreach ($query_run as $row) {
?>
<option value="<?php echo $row["m_name"];
?>"> <?php echo $row["m_name"];
// The value we usually set is the primary key
?>

<?php
}
}

?>
</select>
<label>Select Monument</label>
<input type="date" name="dates">
<input type="submit" name="SubmitButton" value="Generate Report">
</form>

<?php  
$message = "";
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    $mname = $_POST['m_name'];
     $date = $_POST['dates'];
  $var = empty($_POST['dates']);
    if ($_POST['m_name']==="--select--" && $var === "1")
    {
    $sqladd ="";
    //    $sqladd ="WHERE m_name=$mname AND Booking_Date =$date";
    
    }
    else if  ($_POST['m_name'] !="--select--")
    {
        if ($var != 1)
        {
       
            $sqladd ="WHERE Monument_Name='$mname'  AND Booking_Date ='$date' ";
        }
        else 
        {
            $sqladd ="WHERE Monument_Name='$mname' ";

        }
    
    }
}    


?>
<br>
<br>
        <h4><?php echo "SHOWING RESULTS ".$sqladd?></h4>

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
                        <th>Visitor Name</th>
                        <th>Visitor Age</th>
                        <th>Visitor Email</th>
                        <th>Visitor Mobile</th>
                        <th>Visitor Address</th>
                        <th>Visitor Country</th>
                        <th>Visitor Gender</th>
                        <th>Visitor Nationality</th>
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
$query = "SELECT * FROM Booking_Details $sqladd" ;
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
<td><?php echo $row['visitor_name'];?></td>
<td><?php echo $row['visitor_age'];?></td>
<td><?php echo $row['visitor_email'];?></td>
<td><?php echo $row['visitor_mobile'];?></td>
<td><?php echo $row['visitor_address'];?></td>
<td><?php echo $row['visitor_country'];?></td>
<td><?php echo $row['visitor_gender'];?></td>
<td><?php echo $row['visitor_nationality'];?></td>
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
<span class=""><a href="../<?php echo $row['ticket_pdf'];?>" target="_blank"><span class="list-name"> View Ticket </span></a></i></span>
</td>
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




