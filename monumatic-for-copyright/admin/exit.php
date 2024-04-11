<?php session_start();

if (isset($_SESSION['error'])) {
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}
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
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
      <title>Monumatic | Mark Entry </title>
</head>
<body>
    <div class="login-page" style="background-image: url(assets/images/monument_collage.jpg);">
        <div class="login-from-wrap"  style="width: 600px; height: 600px;">
		<form action="exit_for_monuments.php" method="post">


<?php if (isset($_GET['error'])) { ?>
	<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>

<div class="row">
	   <div class="col-md-12">
		   <video id="preview" width="100%" height="90%"></video>
	   </div>
	   <div class="col-md-6">
		  <form method="post" class="form-horizontal">
		  <label>SCAN QR CODE HERE</label>
		  <input type="hidden" name="qrcode_text" id="text" readonyy="" placeholder="INPUT QR CODE" class="form-control">
		  </form>

<!-- <button type="submit" class="button-primary">Mark Entry</button> -->
</div>
   </div>
</form>
<?php function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobile()){
    // Do something for only mobile users
?>
  <script>
	  
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
  Instascan.Camera.getCameras().then(function(cameras){
	  if(cameras.length > 0 ){
		  scanner.start(cameras[1]);
	  } else{
		  alert('No cameras found');
	  }

  }).catch(function(e) {
	  console.error(e);
  });

  scanner.addListener('scan',function(c){
	  document.getElementById('text').value=c;
	  document.forms[0].submit();
  });

</script>
<?php }
else {?>
 <script>
	  
	  let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
	  Instascan.Camera.getCameras().then(function(cameras){
		  if(cameras.length > 0 ){
			  scanner.start(cameras[0]);
		  } else{
			  alert('No cameras found');
		  }
	
	  }).catch(function(e) {
		  console.error(e);
	  });
	
	  scanner.addListener('scan',function(c){
		  document.getElementById('text').value=c;
		  document.forms[0].submit();
	  });
	
	</script>
<?php 
}

?>
	  <a href="dashboard.php"> <button class="button-primary">GO BACK</button></a>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 09:13:00 GMT -->
</html>