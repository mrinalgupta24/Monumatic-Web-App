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
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Admin User Details</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Date Of Creation</th>
                                            <th>Verification Status</th>
                                            <th>Account_Status</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                       
                                         require 'connection.php';
                                         $query = "SELECT * FROM Admin_User  ORDER BY Serial_Number";
                                         $query_run = mysqli_query($conn, $query);
                                         if (mysqli_num_rows($query_run) > 0) {
                                         foreach ($query_run as $row) {
                                              
                            
                                        ?>

                                        <tr>
                                            <td><span class="list-img"><?php echo $row['User_Id'];?></span>
                                            </td>
                                            <td><a href="#"><span class="list-name"> <?php echo $row['First_Name']." ".$row['Last_Name'];?></span></a>
                                            </td>
                                            <td><?php echo $row['Mobile_Number'];?></td>
                                            <td><?php echo $row['Username'];?></td>
                                            <td>
                                                <span class="badge"><?php echo $row['Email'];?></span>
                                            </td>
                                            <td>
                                                <span class="badge"><?php echo $row['Date_Of_Creation'];?></span>
                                            </td>
                                            <td>
                                                <span class="badge"><?php echo $row['Verification_status'];?></i></span>
                                            </td>
                                            <td>
                                                <span class="badge "><?php echo $row['Account_Status'];?></i></span>
                                            </td>
                                            <td>
                                                <span class=""><?php echo $row['Comments'];?></i></span>
                                            </td>
                                        </tr>
                                        <?php
                              }
                           }
                           ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
</div>
</div>

</body>

<?php
include "footer.php";
?>

</html>




