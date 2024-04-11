<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image2'])) {
	include "connection.php";

	echo "<pre>";
	print_r($_FILES['my_image2']);
	echo "</pre>";

	$img_name = $_FILES['my_image2']['name'];
	$img_size = $_FILES['my_image2']['size'];
	$tmp_name = $_FILES['my_image2']['tmp_name'];
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
			
			echo $monumentname = $_POST['Monument_Name']; echo "<br>";
			echo $imagepath = "admin/monument-upload/$new_img_name"; echo "<br>";
			echo $currency = $_POST['currency']; echo "<br>";
			echo $min_price = $_POST['minimum_price']; echo "<br>";
			echo $max_price = $_POST['maximum_price']; echo "<br>";
			echo $unit = $_POST['unit']; echo "<br>";
			echo $days = $_POST['days_open']; echo "<br>";
			echo $location = $_POST['location']; echo "<br>";
			echo $url = $monumentname.".php"; echo "<br>";
			echo $description = $_POST['short_desc']; echo "<br>";
			echo $city_name = $_POST['City_Name']; echo "<br>";
			echo $status =$_POST['status']; echo "<br>";

			$sql1 = "INSERT INTO `Monument_Details` (`m_name`, `imagepath`, `currency`, `min_price`, `max_price`, `unit`, `days`, `location`, `url`, `description`, `City_Name`, `Status`) VALUES ('$monumentname','$imagepath','$currency','$min_price','$max_price','$unit','$days','$location','$url','$description','$city_name','$status')";
			//echo $cityname ;
			mysqli_query($conn, $sql1);
			//
		//	 copy("../city template.php","../$cityname.php");

			
	//header("Location: city_add_confirmation.php");
	$uploadsucess="sucess";
	if ($uploadsucess==="sucess")
	{
		/// upload 2
if (isset($_POST['submit']) && isset($_FILES['my_image1'])) {
	include "connection.php";

	echo "<pre>";
	print_r($_FILES['my_image1']);
	echo "</pre>";

	$img_name = $_FILES['my_image1']['name'];
	$img_size = $_FILES['my_image1']['size'];
	$tmp_name = $_FILES['my_image1']['tmp_name'];
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
		
				echo $monumentname = $_POST['Monument_Name'];
				echo $imagepath2 = "admin/monument-upload/$new_img_name2";
				echo $min_price = $_POST['minimum_price'];
				echo $unit = $_POST['unit'];
				echo $days = $_POST['days_open'];
				echo $location = $_POST['location'];
				echo $currency = $_POST['currency'];
				echo $url = $_POST['Monument_Name'].".php";
				echo $description = $_POST['short_desc'];
				echo $long_desc = $_POST['long_desc'];
				echo $city_name = $_POST['City_Name'];
				echo $max_price = $_POST['maximum_price'];
				echo $status =$_POST['status'];
				echo $title =$_POST['page_title'];
				echo $timings =$_POST['timings'];
				echo $entry =$_POST['entry'];
				echo $ticket_limit =$_POST['t_limit'];
				echo $parking_limit =$_POST['p_limit'];
				echo $pb_limit =$_POST['pb_limit'];
				echo $day_closed =$_POST['days_closed'];
				echo $PIO = $_POST['pio'];
				echo $NRI = $_POST['nri'];
				echo $ticket_status = $_POST['ticket_status'];
			

			$sql1 = "INSERT INTO `monuments_details`(`m_name`, `title`, `imagepath`, `days`, `location`, `description`, `currency`, `min_price`, `max_price`, `unit`, `timings`, `city`, `entry`, `day closed`, `PIO`, `NRI`, `ticket_status`, `ticket_limit`, `parking_limit`, `parking_limit_for_bikes` ) VALUES ('$monumentname','$title','$imagepath2','$days','$location','$long_desc','$currency','$min_price','$max_price','$unit','$timings','$city_name','$entry','$day_closed','$PIO','$NRI','$ticket_status','$ticket_limit','$parking_limit', '$pb_limit')";
			mysqli_query($conn, $sql1);
			//
			copy("../monument_template.php","../$monumentname.php");
			header("Location: monument_add_confirmation.php");


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
