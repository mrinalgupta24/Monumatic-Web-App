
<?php


$host_name = 'localhost';
$user_name = 'root';
$password ='root';
$database_name = 'monumatic';
$conn = mysqli_connect($host_name, $user_name,$password,$database_name);

if (mysqli_connect_error()) {
    echo "<script>alert('cannot connect to the database');</script>";
}
?>