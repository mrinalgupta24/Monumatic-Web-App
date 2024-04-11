<!-- 
label>Monument Name</label>
<input name="Monument_Name" class="form-control" type="text"> 
<label>Currency</label>
<select name="currency">
<option value="INR">INR</option>
<option value="USD">USD</option>
<label>Minimum Price</label>
<input name="minimum_price" class="form-control" type="text">
<label>Maximum Price</label>
<input name="maximum_price" class="form-control" type="text">
<label>Unit</label>
<select name="unit">
<option value="Per Person">Per Person</option>
<option value="Group">Group</option>
<label>Days Open</label>
<select name="days_open">
<label>Location</label>
<input name="location" class="form-control" type="text">         
<label>Short Desc.</label>
<label>Long Desc.</label>
<input name="long_desc" class="form-control" type="text">
<label>Set Current Status</label>
<select name="status">
 <option value="Active">Active</option>
<label>City Name</label>
<select name ="City_Name">
<label>Page Title</label>
<input name="page_title" class="form-control" type="text">
<label>Country</label>
<select name="country">
<label>Timings</label>
<select name="timings">
<label>Entry</label>
<select name="entry">
<label>Days Closed</label>
<input name="days_closed" class="form-control" type="text">
<label>PIO Price</label>
<input name="pio" class="form-control" type="text">
<label>NRI Price</label>
<input name="nri" class="form-control" type="text">
<label>Ticket Status</label>
<select name="ticket_status">
<h4>Upload Photo 1</h4>
<input type="file"  name="my_image1">
<h4>Upload Photo 2</h4>
<input type="file"  name="my_image2"> -->


<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image1'])) {
	include "connection.php";

	echo "<pre>";
	print_r($_FILES['my_image1']);
	echo "</pre>";

	$img_name = $_FILES['my_image1']['name'];
	$img_size = $_FILES['my_image1']['size'];
	$tmp_name = $_FILES['my_image1']['tmp_name'];
	$error = $_FILES['my_image1']['error'];

	if ($error === 0) {
		if ($img_size > 1250000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_monument_city.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$name = $_POST['Monument_Name'];
			$new_img_name = str_replace(' ', '', $cityname);
			$allowed_exs = array("jpg", "jpeg", "png"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name =  $name."1".'.'.$img_ex_lc;
				$img_upload_path = 'monument-upload/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

			//	Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				// Insert into Database
				// id Primary	int			No	None		AUTO_INCREMENT	Change Change	Drop Drop	
				// 2	m_name	varchar(80)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 3	imagepath	text	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 4	currency	varchar(10)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 5	min_price	decimal(10,2)			Yes	NULL			Change Change	Drop Drop	
				// 6	max_price	decimal(10,2)			No	None			Change Change	Drop Drop	
				// 7	unit	varchar(20)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 8	days	varchar(80)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 9	location	text	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 10	url	text	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 11	description	text	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 12	City_Name	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 13	Status	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
			
			
			echo $monumentname = $_POST['Monument_Name'];
			echo $imagepath = "admin/monument-upload/$new_img_name";
			echo $min_price = $_POST['minimum_price'];
			echo $unit = $_POST['unit'];
			echo $days = $_POST['days_open'];
			echo $location = $_POST['location'];
			echo $currency = $_POST['currency'];
			echo $url = $_POST['Monument_Name'].".php";
			echo $description = $_POST['short_desc'];
			echo $city_name = $_POST['City_Name'];
			echo $max_price = $_POST['maximum_price'];
			echo $status =$_POST['status'];
			echo $oldname =$_POST['previousm_name'];

			$sql1 = "UPDATE `Monument_Details` SET `m_name`='$monumentname',`imagepath`='$imagepath',`currency`='$currency',`min_price`='$min_price',`max_price`='$max_price',`unit`='$unit',`days`='$days',`location`='$location',`url`='$url',`description`='$description',`City_Name`='$city_name',`Status`='$status' WHERE m_name ='$oldname' ";
			//echo $cityname ;
			mysqli_query($conn, $sql1);
			//
		//	 copy("../city template.php","../$cityname.php");

			
	//header("Location: city_add_confirmation.php");
	$uploadsucess="sucess";
	if ($uploadsucess==="sucess")
	{
		/// upload 2
if (isset($_POST['submit']) && isset($_FILES['my_image2'])) {
	include "connection.php";

	echo "<pre>";
	print_r($_FILES['my_image2']);
	echo "</pre>";

	$img_name = $_FILES['my_image2']['name'];
	$img_size = $_FILES['my_image2']['size'];
	$tmp_name = $_FILES['my_image2']['tmp_name'];
	$error = $_FILES['my_image2']['error'];

	if ($error === 0) {
		if ($img_size > 1250000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_monument_city.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$name = $_POST['Monument_Name'];
			$new_img_name2 = str_replace(' ', '', $cityname);
			$allowed_exs = array("jpg", "jpeg", "png"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name2 =  $name."2".'.'.$img_ex_lc;
				$img_upload_path = 'monument-upload/'.$new_img_name2;
				move_uploaded_file($tmp_name, $img_upload_path);

			//	Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name2')";
				mysqli_query($conn, $sql);
				// Insert into Database

				// moun_id Primary	int			No	None		AUTO_INCREMENT	Change Change	Drop Drop	
				// 2	m_name	varchar(80)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 3	title	varchar(150)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 4	imagepath	text	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 5	days	varchar(20)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 6	location	varchar(225)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 7	description	text	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 8	currency	varchar(10)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 9	min_price	decimal(10,2)			No	None			Change Change	Drop Drop	
				// 10	max_price	decimal(10,2)			No	None			Change Change	Drop Drop	
				// 11	unit	varchar(20)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 12	timings	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 13	city	varchar(50)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 14	entry	varchar(50)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 15	day closed	varchar(50)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 16	PIO	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 17	NRI	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
				// 18	ticket_status	varchar(100)	utf8mb4_general_ci		No	None			Change Change	Drop Drop	
			
				echo $monumentname = $_POST['Monument_Name'];
				ECHO "<br>";
				echo $imagepath2 = "admin/monument-upload/$new_img_name2";	ECHO "<br>";
				echo $min_price = $_POST['minimum_price'];	ECHO "<br>";
				echo $unit = $_POST['unit'];	ECHO "<br>";
				echo $days = $_POST['days_open'];	ECHO "<br>";
				echo $location = $_POST['location'];	ECHO "<br>";
				echo $currency = $_POST['currency'];	ECHO "<br>";
				echo $url = $_POST['Monument_Name'].".php";	ECHO "<br>";
				echo $description = $_POST['short_desc'];	ECHO "<br>";
				echo $long_desc = $_POST['long_desc'];	ECHO "<br>";
				echo $city_name = $_POST['City_Name'];	ECHO "<br>";
				echo $max_price = $_POST['maximum_price'];	ECHO "<br>";
				echo $status =$_POST['status'];	ECHO "<br>";
				echo $title =$_POST['page_title'];	ECHO "<br>";
				echo $timings =$_POST['timings'];	ECHO "<br>";
				echo $entry =$_POST['entry'];	ECHO "<br>";
				echo $ticket_limit =$_POST['t_limit'];	ECHO "<br>";
				echo $parking_limit =$_POST['p_limit'];	ECHO "<br>";
				echo $pb_limit =$_POST['pb_limit'];	ECHO "<br>";
				echo $day_closed =$_POST['days_closed'];	ECHO "<br>";
				echo $PIO = $_POST['PIO'];	ECHO "<br>";
				echo $NRI = $_POST['NRI'];	ECHO "<br>";
				echo $ticket_status = $_POST['ticket_status'];	ECHO "<br>";
				echo $oldname =$_POST['previousm_name'];	ECHO "<br>";

			

			$sql1 = "UPDATE `monuments_details` SET `m_name`='$monumentname',`title`='$title',`imagepath`='$imagepath2',`days`='$days',`location`='$location',`description`='$long_desc',`currency`='$currency',`min_price`='$min_price',`max_price`='$max_price',`unit`='$unit',`timings`='$timings',`city`='$city_name',`entry`='$entry',`day closed`='$day_closed',`PIO`='$PIO',`NRI`='$NRI',`ticket_status`='$ticket_status',`ticket_limit`='$ticket_limit',`parking_limit`='$parking_limit',`parking_limit_for_bikes`='$pb_limit' WHERE m_name ='$oldname'";
			mysqli_query($conn, $sql1);
			//
			 copy("../monument_template.php","../$monumentname.php");
		//	 header("Location: monument_add_confirmation.php?error=$em");


			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}

	}
else 
{
	$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");

}
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}
?>
