<?php session_start(); ?>
<?php
   $usernmae= $_POST['username'];

    require 'connection.php';
    $query = "SELECT Email FROM Normal_User where Username='$usernmae' AND Verification_status='Activated'";
    $query_run = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($query_run);

     $email_address = $row[0]; 
     $_SESSION["email"] = "$email_address";
if (empty($email_address))
{
  // Incorrect password
  $_SESSION['error'] = '<script> alert("Incorrect username and/or password!")</script>';
  header("Location: user_login.php");
}
else{

}
?>
                               

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
  // $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='shubham.monumatic@gmail.com'; // SMTP username
    $mail->Password='hbqcrrpopwzemvax'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('shubham.monumatic@gmail.com', 'Monumatic');
     $email= $_SESSION["email"];
    
    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Account Login OTP';
	$message = "<p>OTP For Monumatic Login is : $otp </p>";

    $mail->Body="OTP For Monumatic Login is : $otp ";
	// $mail->Body="maa";
    $mail->send();

    echo  "<script> alert('OTP For Monumatic Login has been sent on registered mail id'); </script>";
} 
catch(Exception $e) {
	echo $mailstatus= 'Message could not be sent. Kindly contact support immediately';
    $err= 'Mailer Error: '.$mail->ErrorInfo;
}
}
  
}
mail_send();

session_start();
require 'connection.php';
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
$urname = $_POST['username'];
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare("SELECT username, password, user_id, email FROM Normal_User WHERE username ='$urname' AND Account_Status ='Active' , Verification_Status='Activated'")) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();

	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
///
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password,$customer_id, $email);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        $usrpasswd=$_POST['password'];
        if (password_verify($usrpasswd,$password ))
        {
            
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['email'] = $email;
            //$_SESSION['cutomer_id'] = $customer_id;
         
            ?>
            <?php
                
        } else {
            // Incorrect password
            $_SESSION['error'] = '<script> alert("Incorrect username and/or password!")</script>';
            header("Location: user_login.php");
        }
    } 
    else 
    {
        // Incorrect username
        $_SESSION['error'] = '<script> alert("Incorrect username and/or password!")</script>';
    header("Location: user_login.php");
    }
}


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
      <title>Monumatic | User Login </title>
</head>
<body>
    <div class="login-page" style="background-image: url(assets/images/monument_collage.jpg);">
        <div class="login-from-wrap">
            <form class="login-from" action="user_otp_verify.php" method="post"  >
                <h1 class="site-title">
                    <a href="index.php">
                        <img src="assets/images/header_logo_monumatic2.png" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="first_name1">Enter OTP</label>
                    <input type="text" name ="otpfromuser" placeholder="OTP" class="validate">
                    <input type="hidden" name ="username" placeholder="OTP" value ="<?php echo $_POST['username']; ?>">

                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="validate">
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
