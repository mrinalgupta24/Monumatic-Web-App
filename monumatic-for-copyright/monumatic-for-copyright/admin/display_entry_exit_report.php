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
       
            $sqladd ="WHERE Booking_Details.Monument_Name='$mname'  AND Booking_Details.Booking_Date ='$date' ";
        }
        else 
        {
            $sqladd ="WHERE Booking_Details.Monument_Name='$mname' ";

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
                        <th>Entry Date</th>
                        <th>Entry Time</th>
                        <th>Exit Date</th>
                        <th>Exit Time</th>
                    </tr>
                </thead>
                <?php

                   
require 'connection.php';
$query = "SELECT Booking_Details.Ticket_id, Booking_Details.visitor_name,Booking_Details.Monument_Name,Booking_Details.Customer_ID,monument_entry_exit_status.Ticket_id, monument_entry_exit_status.Entry_Date,monument_entry_exit_status.Exit_Date,monument_entry_exit_status.Entry_Time,monument_entry_exit_status.Exit_Time FROM Booking_Details INNER JOIN monument_entry_exit_status ON Booking_Details.Ticket_id = monument_entry_exit_status.Ticket_id $sqladd;" ;
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
<td><?php echo $row['Entry_Date'];?></td>
<td><?php echo $row['Entry_Time'];?></td>
<td><?php echo $row['Exit_Date'];?></td>
<td><?php echo $row['Exit_Time'];?></td>
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




