<?php
include "header.php";
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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Monumatic </title>
</head>

<body>





<div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box user-form-wrap">
                            <h4>Add City</h4>
                            <form class="form-horizontal" action="CityImageUpload-forupdate.php" method="post" enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            <label>City Name</label>
                                            <select name ="City_Name" required>

                                                <?php
                                                require 'connection.php';
                                                $query = "SELECT DISTINCT `city_name` FROM city_data";
                                                $query_run = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $row) {
                                                ?>
                                                <option value="<?php echo $row["city_name"];
                                                        // The value we usually set is the primary key
                                                ?>"> <?php echo $row["city_name"];
                                                        // The value we usually set is the primary key
                                                ?>
                                               <?php
                                                    }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Set Current Status</label>
                                            <select name="status" required>
                                                <option value="Active">Active</option>
                                                <option value="In-Active">In-Active</option>
                                            </select>
                                        </div>
                                    </div>

                                     <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select name="country" required>

                                                <?php
                                                require 'connection.php';
                                                $query = "SELECT * FROM Country_List";
                                                $query_run = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $row) {
                                                ?>
                                                <option value="<?php echo $row["name"];
                                                        // The value we usually set is the primary key
                                                ?>"> <?php echo $row["nicename"];
                                                        // The value we usually set is the primary key
                                                ?>
                                               <?php
                                                    }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-12">
                                        <h4>Upload Photo</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="upload-input">
                                            <div class="form-group">
                                                <span class="upload-btn">Upload a image</span>
                                                <input type="file" required  name="my_image">
                                            <br><br> <h3>   <?php echo $_GET['error']; ?></h3>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <button type="submit" 
                  name="submit"
                  value="Upload"class="button-primary">Upload Setting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</body>

<?php
include "footer.php";
?>

</html>





