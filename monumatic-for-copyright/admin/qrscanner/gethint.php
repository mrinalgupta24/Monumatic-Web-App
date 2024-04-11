<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php

// get the q parameter from URL
$q = $_REQUEST["q"];

//$hint = "";
$con = mysqli_connect('localhost','root','','Monumatic');
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// lookup all hints from array if $q is different from ""
if ($q !="") {
  /*$q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }*/
$result=mysqli_query($con,"SELECT * FROM Qr_details WHERE name='$q'");
$rowcount=mysqli_num_rows($result);
if ($stmt = $con->prepare("SELECT qr_txt FROM rq_deatails WHERE rq_txt = '$q'")) 
{
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

if($stmt=$q)
{
echo '<div class="alert alert-success"><strong>Success!</strong> employee successfully registered</div>'+date('l jS \of F Y h:i:s A');
}
}
}
// Output "no suggestion" if no hint was found or output correct values
//echo $hint === "" ? "no suggestion" : $hint;
?>