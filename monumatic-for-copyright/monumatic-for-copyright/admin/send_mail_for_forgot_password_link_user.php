
<?php
$emailid = $_POST['registered_email_id'];
if(empty($emailid))
{
    $err = "Something went Wrong !!!!!!!!";

}
else
{
require 'connection.php';
if ($stmt = $conn->prepare('SELECT `Serial_Number`, `User_Id`, `Username`, `Email` FROM Normal_User where Email = ? ORDER BY Serial_Number')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $emailid);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($Serial_Number, $User_Id,$Username, $email);
        $stmt->fetch();
       $Serial_Number."<br>".$User_Id."<br>".$Username."<br>".$email."<br>";
    }
}


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
     $email;
    $mail->setFrom('shubham.monumatic@gmail.com', 'Monumatic');
    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Account Password Reset Link';
	$activate_link = 'http://localhost/Monumatic/admin/password_reset_user.php?email=' . $email . '&userid=' . $User_Id;
	$message = '<p>Please click the following link to Reset your account Password: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';

    $mail->Body='Please click the following link to Reser your account Password: <a href="' . $activate_link . '">' . $activate_link . '</a>'."<br>"."If This Request wasn't raised by you dont open the link "."<br>"."Thanks & Regards "."<br>"."Team Monumatic";
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


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Monumatic</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<style type="text/css">

    body
    {
        background:white;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:#2F7694;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:#2F7694;
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
		
	.video_ad
		{
			display: inline-block;
			width: 48%;
			margin-top: 20px;
			margin-left: 1%;
		}
   
	</style>
	
</head>

<body>
   <div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <h1>Forgot Password <?php echo $mailstatus ?></h1>
               <p>Exciting update! Password Link <?php echo $mailstatus ?>.</p>
               <a href="user_login.php">Go to Home</a>
            </div>
            
         </div>
      </div>
   </div>
</div>
   
</body>
</html>
