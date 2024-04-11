<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;
function mail_send(){
$otp = rand(111111,999999);
require 'connection.php';
$username= $_POST['username'];
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("h:i:s");
"i am here";
	if ($sql = "INSERT INTO `otp_authentication`(`username`, `email_id`, `otp`, `time_stamp`) VALUES ('$username','$username','$otp','$timestamp')") {
	// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
	mysqli_query($conn, $sql);
	echo $msg= 'otp sucessfully generated';
    }
    else{

    }
$mail=new PHPMailer(true); // Passing `true` enables exceptions
{
try {
    
    //settings
   // $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='shubham.monumatic@gmail.com'; // SMTP username
    $mail->Password='hbqcrrpopwzemvax'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('sender@whatever.com', 'Monumatic');
	$email="shubham.monumatic@gmail.com";
    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Account Login OTP';
	$message = "<p>OTP For Monumatic Login is : $otp </p>";

    $mail->Body="OTP For Monumatic Login is : $otp ";
	// $mail->Body="maa";
    $mail->send();

  echo  $mailstatus= 'Message has been sent';
} 
catch(Exception $e) {
	$mailstatus= 'Message could not be sent. Kindly contact support immediately';
    $err= 'Mailer Error: '.$mail->ErrorInfo;
}
}
  
}
?>
<?php
session_start();
 $_POST['otpfromuser'].$_SESSION['name'].  $_SESSION['email'].$_SESSION['loggedin'];
require 'connection.php';
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT username, otp, time_stamp FROM `otp_authentication` WHERE username = ? and otp =?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('ss', $_SESSION['name'],$_POST['otpfromuser']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

///
if ($stmt->num_rows > 0) {
	$stmt->bind_result($user_name_for_otp, $otp_recived_from_server,$timestamp_from_server);
	$stmt->fetch();
	 $user_name_for_otp.$otp_recived_from_server.$timestamp_from_server;
}
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("h:i:s");
      $start = strtotime($timestamp_from_server);
      $end = strtotime($timestamp);

      $hours = intval(($end - $start)/3600);
      //If you want it in minutes, you can divide the difference by 60 instead
      $mins = (float)(($end - $start) / 60);
    if ($mins < 5)
    {
     "Login Successfull";
      $username12= $_SESSION['name'];
        require 'connection.php';
   
   $query = "SELECT * FROM Admin_User WHERE Username ='$username12' ORDER BY Serial_Number";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
                       $_SESSION["Serial_Number"] = $row['Serial_Number'];
                    $_SESSION["User_Id"] = $row['User_Id'];
                    $_SESSION["Name"] = $row['First_Name']." ".$row['Last_Name'];
                   $_SESSION["Mobile_Number"] = $row['Mobile_Number'];
                   $_SESSION["Address"] = $row['Address'];
                   $_SESSION["Country"] = $row['Country'];
                   $_SESSION["Date_Of_Birth"] = $row['Date_Of_Birth'];
                       $_SESSION["Govt_Id_Path"] = $row['Govt_Id_Path'];
                       $_SESSION["Username"] = $row['Username'];
                       $_SESSION["Email"] = $row['Email'];
                       $_SESSION["Password"] = $row['Password'];
                       $_SESSION["Date_Of_Creation"] = $row['Date_Of_Creation'];
                       $_SESSION["Date_Of_Updation"] = $row['Date_Of_Updation'];
                       $_SESSION["Ip_address"] = $row['Ip_address'];
                       $_SESSION["Verification_status"] = $row['Verification_status'];
                       $_SESSION["Account_Status"] = $row['Account_Status'];
                       $_SESSION["Comments"] = $row['Comments'];
                       $_SESSION["FName"] = $row['First_Name'];
                       $_SESSION["LName"] = $row['Last_Name'];
           
   
        }
    }
     header( "refresh:0;url=dashboard.php" );
    }
    else 
    {
        echo 'Oh No!!!!!!! Either the OTP Expired or you Intered the Wrong OTP!!!!!<button>' ."GO BACK" .'</button> Click Here to Resend OTP';
        header( "refresh:10;url=index.php" );

    }


	// $message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';

}

?>