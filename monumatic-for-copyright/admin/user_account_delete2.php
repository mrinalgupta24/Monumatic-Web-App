
<?php
session_start();
 $_POST['otpfromuser'];
$oldpassword= $_POST['password'];
 $user_id = $_SESSION['User_Id'];
$passwordusr = password_hash($oldpassword, PASSWORD_BCRYPT);
 $date = date("Y/m/d");

require 'connection.php';
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT username, otp, time_stamp FROM `otp_authentication` WHERE username = ? and otp =? ORDER BY serialno')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('ss', $_SESSION['email'],$_POST['otpfromuser']);
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
     "<br>".$timestamp."<br>".$timestamp_from_server."<br>".$mins."<br>";

    if ($mins < 5)
    {
  $emailforfetch = $_SESSION['email'];
    $user_id = $_SESSION['User_Id'];
       require 'connection.php';

        if ($sql = "UPDATE `Normal_User` SET `Verification_status`='In-Active',`Account_Status`='DELETED',`Comments`='ACCOUNT DELETED' WHERE Email='$emailforfetch' and User_Id ='$user_id'") {
            // Set the new activation code to 'activated', this is how we can check if the user has activated their account.
            require 'connection.php';
         $sql = "UPDATE `Normal_User` SET `Verification_status`='In-Active',`Account_Status`='DELETED',`Comments`='ACCOUNT DELETED' WHERE Email='$emailforfetch' and User_Id ='$user_id'";
            mysqli_query($conn, $sql);
           $msg= 'Password Updated Successfully';
           session_destroy();
        header( "refresh:0;url=index.php" );
            }
            else{
        
            } // UPDATE `Admin_User` SET `Serial_Number`='[value-1]',`User_Id`='[value-2]',`First_Name`='[value-3]',`Last_Name`='[value-4]',`Mobile_Number`='[value-5]',`Address`='[value-6]',`Country`='[value-7]',`Date_Of_Birth`='[value-8]',`Govt_Id_Path`='[value-9]',`Username`='[value-10]',`Email`='[value-11]',`Password`='[value-12]',`Date_Of_Creation`='[value-13]',`Date_Of_Updation`='[value-14]',`Ip_address`='[value-15]',`Verification_status`='[value-16]',`Account_Status`='[value-17]',`Comments`='[value-18]' WHERE 1

    }
    else 
    {
        echo 'Oh No!!!!!!! Either the OTP Expired or you Intered the Wrong OTP!!!!!<button>' ."GO BACK" .'</button> Click Here to Resend OTP';
       // header( "refresh:10;url=index.php" );

    }


	// $message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';

}

?>
<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;
$queryrun ="sucess";
$mail=new PHPMailer(true); // Passing `true` enables exceptions
if ($queryrun==="sucess")
{
     "here";
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
    $emailforfetch = $_SESSION['email'];
     $email = $emailforfetch;
    $mail->setFrom('shubham.monumatic@gmail.com', 'Monumatic');
    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='MONUMATIC ACCOUNT DELETED SUCCESSFULLY';
	$message = '<p>MONUMATIC ACCOUNT DELETED SUCCESSFULLY</p>';

    $mail->Body='MONUMATIC ACCOUNT DELETED SUCCESSFULLY'."<br>"."If This Request wasn't raised by you Contact Suport ASAP "."<br>"."Thanks & Regards "."<br>"."Team Monumatic";
	// $mail->Body="maa";
    $mail->send();

   $mailstatus= 'Message has been sent';
} 
catch(Exception $e) {
	$mailstatus= 'Message could not be sent. Kindly contact support immediately';
    $err= 'Mailer Error: '.$mail->ErrorInfo;
}
}

?>
