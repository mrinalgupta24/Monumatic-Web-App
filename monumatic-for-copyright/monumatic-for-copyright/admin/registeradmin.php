<?php
require 'connection.php';
session_start();
$query = "SELECT * FROM Admin_User ORDER BY Serial_Number";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) 
{
    while ($row = mysqli_fetch_array($query_run)) {
        $temp = $row['Serial_Number'];
        $temp;
    }
}
$temp = $temp + 1;
//Customized form of serial no.
$Customer_id = 'MONUMATIC-000' . $temp;
 $Customer_id."<br>";
?>
<?php
$phone = $_POST['phone'];
if(preg_match('/^[0-9]{10}+$/', $phone)) {
	 "Valid Phone Number";
	} else {
	echo "Invalid Phone Number";
	$_SESSION['error'] = '<script> alert("Incorrect Mobile Number Format!!!!!!!")</script>';
	header("Location: new-admin-user.php");
	}
?>
<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "connection.php";

	echo "<pre>";
    $_FILES['my_image'];
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: new-admin-user?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$name = $_POST['UserName'];
			$allowed_exs = array("jpg", "jpeg", "png"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name =  $name.'.'.$img_ex_lc;
				$img_upload_path = 'adminIDProof/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

			//	Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
	

			}else {
				$em = "You can't upload files of this type";
		        header("Location: new-admin-user.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		
	}

}else {
	$em = "unknown error occurred!";
}
?>
<?php
require 'connection.php';

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['UserName'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['UserName']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
///

$uniqid = uniqid();

///
// We need to check if the account with that username exists.
if ($stmt = $conn->prepare('SELECT Username, password FROM Admin_User WHERE Username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['UserName']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		$error= 'Username exists, please choose another!';
	} 
    else 
    {
		// Insert new account
    //     Serial_Number	int			No	None			Change Change	Drop Drop	
	// 2	User_Id	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 3	First_Name	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 4	Last_Name	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 5	Mobile_Number	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 6	Address	varchar(200)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 7	Country	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 8	Date_Of_Birth	date			No	None			Change Change	Drop Drop	
	// 9	Govt_Id_Path	varchar(200)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 10	Username	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 11	Email	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 12	Password	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 13	Date_Of_Creation	date			No	None			Change Change	Drop Drop	
	// 14	Date_Of_Updation	date			No	None			Change Change	Drop Drop	
	// 15	Ip_address	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 16	Verification_status	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 17	Account_Status	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	// 18	Comments	varchar(500)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
	
     $lastname = $_POST['lastname'];
     $mobilenumber = $_POST['phone'];
     $address = $_POST['address'];
     $country = $_POST['country'];
     $firstname = $_POST['firstname'];
     $dateofbirth = $_POST['dateofbirth'];
     $username = $_POST['UserName'];
     $email = $_POST['email'];
	 $oldpassword = $_POST['password'];
     $passwordusr = password_hash($oldpassword, PASSWORD_BCRYPT);

	 
     $date =  date("Y-m-d") ;
	 $img_upload_path ="AdminIDProof/$username";

        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   
        {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
        {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from remote address
        else
        {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }




        $ip_address;
		require 'connection.php';


		if ($sql1 = "INSERT INTO `Admin_User`(`Serial_Number`, `User_Id`, `First_Name`, `Last_Name`, `Mobile_Number`, `Address`, `Country`, `Date_Of_Birth`, `Govt_Id_Path`, `Username`, `Email`, `Password`, `Date_Of_Creation`, `Date_Of_Updation`, `Ip_address`, `Verification_status`, `Account_Status`, `Comments`) VALUES ('$temp','$Customer_id','$firstname','$lastname','$mobilenumber','$address','$country','$dateofbirth','$img_upload_path','$username','$email','$passwordusr','$date','$date','$ip_address','$uniqid','in-active','New Account Created')")
        {
			$sql = "INSERT INTO `Admin_User`(`Serial_Number`, `User_Id`, `First_Name`, `Last_Name`, `Mobile_Number`, `Address`, `Country`, `Date_Of_Birth`, `Govt_Id_Path`, `Username`, `Email`, `Password`, `Date_Of_Creation`, `Date_Of_Updation`, `Ip_address`, `Verification_status`, `Account_Status`, `Comments`) VALUES ('$temp','$Customer_id','$firstname','$lastname','$mobilenumber','$address','$country','$dateofbirth','$img_upload_path','$username','$email','$passwordusr','$date','$date','$ip_address','$uniqid','in-active','New Account Created')";
			mysqli_query($conn, $sql);
			$mailchk= 'Please check your email to activate your account!';
			$queryrun ="sucess";
		} 
        else 
        {
			// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
			$em;
		}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	$em;
}

?>
<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$mail=new PHPMailer(true); // Passing `true` enables exceptions
if ($queryrun=="sucess")
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
	$email=$_POST['email'];
    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Account Activation Required';
	$activate_link = 'http://localhost/monumatic/admin/admin_activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
	$message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';

    $mail->Body='Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a>';
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
<title>Monumatic </title>
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
               <h1><?php echo $Customer_id ?> Sucessfully Created!</h1>
               <p><?php if ($em ==0 or $error ==0 )
			   {
			   }
			   else
			   {
				echo   $em."<br>".$error;
			    } 
			?></p>
			   <p>Exciting update! <?php echo $mailchk ?></p>
			   <p>Email Status! <?php echo $mailstatus |$mailstatus.$err?></p>
			   
               <a href="index.php">Go to Home</a>
            </div>
            
         </div>
      </div>
   </div>
</div>
   
</body>
</html>
