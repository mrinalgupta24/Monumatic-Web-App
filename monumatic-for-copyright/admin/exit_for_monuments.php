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
$stmt->bind_param("ss", $qrcode_text, $date);
// //  $stmt = $conn->prepare("SELECT * FROM friendzone WHERE ID = ?");
$stmt->execute();
$stmt->bind_result($qrchecking, $ticket_id, $t_status, $visit_status );
$stmt->fetch();

if ($ticket_id == "") {
	echo "Ticket Not Found";
	echo " Kindly Contact Administration for more information";

		echo '<a href="exit.php"> GO Back</a>';
}
else {
  echo $ticket_id;
  require 'connection.php';

	if($t_status=="INSIDE" & $visit_status=="VISITOR INSIDE" ) {
		// echo "UPDATE Booking_Details SET  `Visitor_Status`='TRIP ENDED' , `Ticket_Status`='TRIP ENDED' WHERE Ticket_ID = '$ticket_id'";
	$stmt = $conn->prepare("UPDATE Booking_Details SET  `Visitor_Status`='TRIP ENDED' , `Ticket_Status`='TRIP ENDED' WHERE Ticket_ID = '$ticket_id'"); 
	// $stmt->bind_param("s", $ticket_id);
	$stmt->execute();
  $date = date("d-m-Y");
  $time =   date("h:i:s");


  $stmt1 = $conn->prepare("UPDATE `monument_entry_exit_status` SET `Ticket_id`='$ticket_id', `Exit_Date`='$date', `Exit_Time`='$time' WHERE `Ticket_id`='$ticket_id'"); 
	//$stmt1->bind_param("s", $ticket_id);
	$stmt1->execute();
	$stmt->close();
		echo "Exit Marked Successfully Redirecting to Home Page";
		?>  <script> 
		setTimeout(function () {    
			window.location.href = 'exit.php'; 
		},2000); // 2 seconds
		
		</script><?php
		
	}
	else
	{
		echo "The Ticket Status is : $visit_status  ... Kindly Contact Administration for more information";
		echo '<a href="exit.php"> GO Back</a>';
	}
}


?>

