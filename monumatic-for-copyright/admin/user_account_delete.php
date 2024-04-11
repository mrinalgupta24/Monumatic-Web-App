<?php session_start(); ?>
<?php  $_SESSION['email']; ?>
<?php echo $_SESSION['userid']; ?>

<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;
function mail_send(){
$otp = rand(111111,999999);
require 'connection.php';
$username= $_SESSION['email'];
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("h:i:s");
 "i am here";
	if ($sql = "INSERT INTO `otp_authentication`(`username`, `email_id`, `otp`, `time_stamp`) VALUES ('$username','$username','$otp','$timestamp')") {
	// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
	mysqli_query($conn, $sql);
 $msg= 'otp sucessfully generated';
    }
    else{

    }
$mail=new PHPMailer(true); // Passing `true` enables exceptions
{
try {
    
    //settings
   // $mail->SMTPDebug=2; // Enable verbose debug output
  // $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='shubham.monumatic@gmail.com'; // SMTP username
    $mail->Password='hbqcrrpopwzemvax'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('shubham.monumatic@gmail.com', 'Monumatic');
	$email= $username;
    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='OTP To Delete Monumatic Account';
	$message = "<p>OTP To Delete Monumatic Account is : $otp </p>";

    $mail->Body="OTP To Delete Monumatic Account is : $otp ";
	// $mail->Body="maa";
    $mail->send();

 $mailstatus= 'Message has been sent';
} 
catch(Exception $e) {
	echo $mailstatus= 'Message could not be sent. Kindly contact support immediately';
    $err= 'Mailer Error: '.$mail->ErrorInfo;
}
}
  
}
?>
<?php
mail_send();
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
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Monumatic | Admin Login </title>
</head>
<body>
    <div class="login-page" style="background-image: url(assets/images/monument_collage.jpg);">
        <div class="login-from-wrap">
            <form class="login-from" action="user_account_delete2.php" method="post"  >
                <h1 class="site-title">
                    <a href="index.php">
                        <img src="assets/images/header_logo_monumatic2.png" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="first_name1">Enter OTP</label>
                    <input type="text" name ="otpfromuser" placeholder="OTP" class="validate">
                    <input type="hidden" class="validate" name="email" value="<?php echo $_POST['email']; ?>">
                    <input type="hidden" class="validate" name="userid" value="<?php echo $_POST['userid']; ?>">
                    <input type="hidden" class="validate" name="password" value="<?php echo $_POST['updated_password']; ?>">

                </div>
                <div class="form-group">
                    <input type="submit" value="DELETE YOUR ACCOUNT" class="validate">
                </div>

            </form>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 09:13:00 GMT -->
</html>


