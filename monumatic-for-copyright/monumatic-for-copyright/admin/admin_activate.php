<?php
// Change this to your connection info.
require 'connection.php';
// Try and connect using the info above.
// First we check if the email and code exists...
if (isset($_GET['email'], $_GET['code'])) {
	if ($stmt = $conn->prepare('SELECT * FROM Admin_User WHERE email = ? AND Verification_Status = ?')) {
		$stmt->bind_param('ss', $_GET['email'], $_GET['code']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
		if ($stmt->num_rows > 0) {
			// Account exists with the requested email and code.
			if ($stmt = $conn->prepare('UPDATE Admin_User SET Verification_status = ? , Account_Status = "Active" WHERE Email = ? AND Verification_status = ?')) {
				// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
				$newcode = 'Activated';
				$stmt->bind_param('sss', $newcode, $_GET['email'], $_GET['code']);
				$stmt->execute();
				$msg= 'Your account is now activated! You can now <a href="login.html">login</a>!';
			}

			
		} else {
			$msg= 'The account is already activated or doesn\'t exist!';
		}
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
               <h1><?php echo $msg ?>!</h1>
               <p>Exciting update! <?php echo $msg ?></p>
               <a href="index.php">Go to Home</a>
            </div>
            
         </div>
      </div>
   </div>
</div>
   
</body>
</html>
