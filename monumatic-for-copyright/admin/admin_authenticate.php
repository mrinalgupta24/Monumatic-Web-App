<?php session_start(); ?>

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
	 $msg= 'otp sucessfully generated';
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

    $mail->setFrom('shubham.monumatic@gmail.com', 'Monumatic');
	$email= $_SESSION['email'];
    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Account Login OTP';
	$message = "<p>OTP For Monumatic Login is : $otp </p>";

    $mail->Body="OTP For Monumatic Login is : $otp ";
	// $mail->Body="maa";
    $mail->send();

  $mailstatus= 'Message has been sent';
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
require 'connection.php';
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT username, password, user_id, email FROM Admin_User WHERE username = ? AND Account_Status ="Active"')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

///
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password,$customer_id, $email);
	$stmt->fetch();

    $usrpasswd=$_POST['password'];
    if (password_verify($usrpasswd,$password ))
    {
        
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
        $_SESSION['email'] = $email;

        mail_send();  
        ?>
        <?php
             
	} else {
        $_SESSION['error'] = '<script> alert("Incorrect username and/or password!")</script>';
        header("Location: index.php");
	}
} 
else 
{
    $_SESSION['error'] = '<script> alert("Incorrect username and/or password!")</script>';
    header("Location: index.php");
}


}
?>

<!doctype html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="../assets/images/favicon.png">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Monumatic | Admin Login </title>
</head>
<body>
    <div class="login-page" style="background-image: url(assets/images/monument_collage.jpg);">
        <div class="login-from-wrap">
            <form class="login-from" action="admin_otp_verify.php" method="post"  >
                <h1 class="site-title">
                    <a href="index.php">
                        <img src="assets/images/header_logo_monumatic2.png" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="first_name1">Enter OTP</label>
                    <input type="text" name ="otpfromuser" placeholder="OTP" class="validate">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="validate">
                </div>

            </form>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>

</html>
