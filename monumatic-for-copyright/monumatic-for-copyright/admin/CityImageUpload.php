<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "connection.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 1250000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_monument_city.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$name = $_POST['City_Name'];
			$new_img_name = str_replace(' ', '', $cityname);
			$allowed_exs = array("jpg", "jpeg", "png"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name =  $name.'.'.$img_ex_lc;
				$img_upload_path = 'monument-upload/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

			//	Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				// Insert into Database
				$cityname = $_POST['City_Name'];
			echo	$citystatus = $_POST['status'];
			$citycountryname = $_POST['country'];

					$sql1 = "INSERT INTO `city_data`(`city_name`,`Country`, `imagepath`, `url`,`city_status`) VALUES
					('$cityname','$citycountryname','admin/monument-upload/$new_img_name', '$cityname.php','$citystatus')";
					echo $cityname ;
			mysqli_query($conn, $sql1);
			//
			 copy("../city template.php","../$cityname.php");

			
	header("Location: city_add_confirmation.php");

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
