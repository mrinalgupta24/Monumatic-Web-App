<?php
session_start();
date_default_timezone_set("Asia/Calcutta"); 
if (isset($_POST['qrcode_text'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$qrcode_text = validate($_POST['qrcode_text']);
}

require 'connection.php';

$date = date("Y-m-d");

$stmt = $conn->prepare('SELECT qr_string,Ticket_id,Ticket_Status,Visitor_Status FROM Booking_Details WHERE qr_string = ? AND Booking_Date = ? ');
// //  $stmt = $conn->prepare("SELECT * FROM friendzone WHERE ID = ?");
$stmt->bind_param("ss", $qrcode_text, $date);
$stmt->execute();
$stmt->bind_result($qrchecking, $ticket_id, $t_status, $visit_status );
$stmt->fetch();
$stmt->close();
// echo $qrcode_text.$date;
if ($ticket_id == "") {
	echo "Ticket Not Found";
	echo " Kindly Contact Administration for more information";

		echo '<a href="entry.php"> GO Back</a>';
}
else {
  echo $ticket_id;

	if($t_status=="Active") {
	$stmt = $conn->prepare('UPDATE Booking_Details SET  `Visitor_Status`="VISITOR INSIDE" , `Ticket_Status`="INSIDE" WHERE Ticket_ID = ?'); 
	$stmt->bind_param("s", $ticket_id);
	$stmt->execute();
  $date = date("d-m-Y");
  $time =   date("h:i:s");

  $stmt1 = $conn->prepare("INSERT INTO `monument_entry_exit_status`(`Ticket_id`, `Entry_Date`, `Entry_Time`) VALUES ('$ticket_id','$date','$time')"); 
	$stmt1->bind_param("s", $ticket_id);
	$stmt1->execute();
	$stmt->close();
		echo "Entry Marked Successfully Redirecting to Home Page";
  ?>  <script> 
    setTimeout(function () {    
        window.location.href = 'entry.php'; 
    },2000); // 2 seconds
    
    </script><?php
    
}
	else
	{
		echo "The Ticket Status is : $visit_status  ... Kindly Contact Administration for more information";
		echo '<a href="entry.php"> GO Back</a>';
	}
}


?>

