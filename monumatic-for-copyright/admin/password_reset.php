<!doctype html>
<html lang="en">
<!-- <?php echo $_GET['email']; ?> -->
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/forgot.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 09:13:00 GMT -->
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
      <title>Monumatic</title>
</head>
<body>
    <div class="login-page" style="background-image: url(assets/images/monument_collage.jpg);">
        <div class="login-from-wrap">
            <form class="login-from" action="admin_authenticate_for_password_updation.php" method = "post">
                <h1 class="site-title">
                    <a href="#">
                        <img src="assets/images/header_logo_monumatic2.png" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="updated_password">Updated Password</label>
                    <input type="password" required name= "updated_password" class="validate">
                    <input type="hidden" class="validate" name="email" value="<?php echo $_GET['email']; ?>">
                    <input type="hidden" class="validate" name="userid" value="<?php echo $_GET['userid']; ?>">

                </div>
                <div class="form-group">
                <input type="Submit" class="validate" value="Submit">

                </div>
            </form>
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

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/forgot.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 09:13:00 GMT -->
</html>