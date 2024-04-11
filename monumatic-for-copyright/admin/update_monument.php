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
                            <form class="form-horizontal" action="monument-ImageUpload-forupdate.php" method="post" enctype="multipart/form-data" >
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <label>Select Monument Name</label>
                                            <select required name ="previousm_name">

                                                <?php
                                                require 'connection.php';
                                                $query = "SELECT DISTINCT `m_name` FROM Monument_Details";
                                                $query_run = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $row) {
                                                ?>
                                                <option value="<?php echo $row["m_name"];
                                                        // The value we usually set is the primary key
                                                ?>"> <?php echo $row["m_name"];
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
                                            <label>Updated Monument Name</label>
                                            <input name="Monument_Name" required class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <select name="currency" required>
                                                <option value="INR">INR</option>
                                                <option value="USD">USD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Minimum Price</label>
                                            <input name="minimum_price" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Maximum Price</label>
                                            <input name="maximum_price" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <select name="unit" required>
                                                <option value="Per Person">Per Person</option>
                                                <option value="Group">Group</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Days Open</label>
                                            <select name="days_open" required>
                                                <option value="7">7</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                                <option value="0">0</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input name="location" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Short Desc.</label>
                                            <input name="short_desc" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Long Desc.</label>
                                            <input name="long_desc" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ticket_limit</label>
                                            <input name="t_limit" class="form-control" type="number" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>parking_limit for Cars</label>
                                            <input name="p_limit" class="form-control" type="number" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>parking_limit for Bikes</label>
                                            <input name="pb_limit" class="form-control" type="number" required>
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
                                            <label>Page Title</label>
                                            <input name="page_title" class="form-control" type="text" required>
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

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Timings</label>
                                            <select name="timings" required>
                                                <option value="Morning to Night">Morning to Night</option>
                                                <option value="24/7">24/7</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Entry</label>
                                            <select name="entry" required>
                                                <option value="Free">Free</option>
                                                <option value="Paid">Paid</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Days Closed</label>
                                            <input name="days_closed" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>PIO Price</label>
                                            <input name="pio" class="form-control" type="number" required>
                                        </div>
                                    </div><div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NRI Price</label>
                                            <input name="nri" class="form-control" type="number" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Ticket Status</label>
                                            <select name="ticket_status" required>
                                                <option value="Active">Active</option>
                                                <option value="In-Active">In-Active</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <h4>Upload Photo 1</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="upload-input">
                                            <div class="form-group">
                                                <span class="upload-btn">Upload a image</span>
                                                <input type="file"  name="my_image1" required>
                                            <br><br> <h3>   <?php echo $_GET['error']; ?></h3>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <h4>Upload Photo 2</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="upload-input">
                                            <div class="form-group">
                                                <span class="upload-btn">Upload a image</span>
                                                <input type="file"  name="my_image2" required>
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





