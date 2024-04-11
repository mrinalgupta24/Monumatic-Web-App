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
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Monumatic </title>
</head>

<body>
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/images/monument_header.png);">
                    <div class="container">
                        <?php require("connection.php") ?>
                        <?php
                          $subject = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
                          $subject=str_ireplace("%20"," ",$subject);
                        $subject=str_ireplace(".php"," ",$subject);
                        $query = "SELECT * FROM monuments_details WHERE m_name = '$subject'";
                        $query_run = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($query_run);
                        ?>
                        <div class="inner-banner-content">
                            <h1 class="inner-title"><?php echo $row["m_name"]; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="single-tour-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="single-tour-inner">
                                <h2><?php echo $row["title"]; ?></h2>
                                <figure class="feature-image">
                                    <img src="<?php echo $row["imagepath"]; ?>" alt="">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                <?php echo $row["days"]." "."Days"; ?>
                                            </li>
                                            <!-- <li>
                                                                        <i class="fas fa-user-friends"></i>
                                                                        People: 4
                                                                  </li> -->
                                            <li>
                                                <i class="fas fa-map-marked-alt"></i>
                                                <?php echo $row["location"]; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="tab-container">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                                                  <a class="nav-link" id="program-tab" data-toggle="tab"
                                                                        href="#program" role="tab"
                                                                        aria-controls="program"
                                                                        aria-selected="false">PROGRAM</a>
                                                            </li> -->
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">REVIEW</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                                        </li> -->
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                            <div class="overview-content">
                                                <?php echo $row["description"]; ?>
                                                <!-- <ul>
                                                                              <li>- Travel cancellation insurance</li>
                                                                              <li>- Breakfast and dinner included</li>
                                                                              <li>- Health care included</li>
                                                                              <li>- Transfer to the airport and return
                                                                                    to the agency</li>
                                                                              <li>- Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing</li>
                                                                        </ul> -->
                                            </div>
                                        </div>
                                        <!-- <div class="tab-pane" id="program" role="tabpanel"
                                                                  aria-labelledby="program-tab">
                                                                  <div class="itinerary-content">
                                                                        <h3>Program <span>( 4 days )</span></h3>
                                                                        <p>Dolores maiores dicta dolore. Natoque placeat
                                                                              libero sunt sagittis debitis? Egestas non
                                                                              non qui quos, semper aperiam lacinia eum
                                                                              nam! Pede beatae. Soluta, convallis irure
                                                                              accusamus voluptatum ornare saepe
                                                                              cupidatat.</p>
                                                                  </div>
                                                                  <div class="itinerary-timeline-wrap">
                                                                        <ul>
                                                                              <li>
                                                                                    <div class="timeline-content">
                                                                                          <div class="day-count">Day
                                                                                                <span>1</span>
                                                                                          </div>
                                                                                          <h4>Ancient Rome Visit</h4>
                                                                                          <p>Nostra semper ultricies eu
                                                                                                leo eros orci porta
                                                                                                provident, fugit?
                                                                                                Pariatur interdum
                                                                                                assumenda, qui aliquip
                                                                                                ipsa! Dictum natus
                                                                                                potenti pretium.</p>
                                                                                    </div>
                                                                              </li>
                                                                              <li>
                                                                                    <div class="timeline-content">
                                                                                          <div class="day-count">Day
                                                                                                <span>2</span>
                                                                                          </div>
                                                                                          <h4>Classic Rome Sightseeing
                                                                                          </h4>
                                                                                          <p>Nostra semper ultricies eu
                                                                                                leo eros orci porta
                                                                                                provident, fugit?
                                                                                                Pariatur interdum
                                                                                                assumenda, qui aliquip
                                                                                                ipsa! Dictum natus
                                                                                                potenti pretium.</p>
                                                                                    </div>
                                                                              </li>
                                                                              <li>
                                                                                    <div class="timeline-content">
                                                                                          <div class="day-count">Day
                                                                                                <span>3</span>
                                                                                          </div>
                                                                                          <h4>Vatican City Visit</h4>
                                                                                          <p>Nostra semper ultricies eu
                                                                                                leo eros orci porta
                                                                                                provident, fugit?
                                                                                                Pariatur interdum
                                                                                                assumenda, qui aliquip
                                                                                                ipsa! Dictum natus
                                                                                                potenti pretium.</p>
                                                                                    </div>
                                                                              </li>
                                                                              <li>
                                                                                    <div class="timeline-content">
                                                                                          <div class="day-count">Day
                                                                                                <span>4</span>
                                                                                          </div>
                                                                                          <h4>Italian Food Tour</h4>
                                                                                          <p>Nostra semper ultricies eu
                                                                                                leo eros orci porta
                                                                                                provident, fugit?
                                                                                                Pariatur interdum
                                                                                                assumenda, qui aliquip
                                                                                                ipsa! Dictum natus
                                                                                                potenti pretium.</p>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="package-price">
                                    <!-- <h5 class="price">
                                                            <span> Rs 00.00 </span> / per person
                                                      </h5> -->

                                    <h5 class="price">
                                        <span>
                                            <?php echo $row['currency'] . " ";
                                            // if ($row['min_price'] == 0 && $row['max_price'] > 0) {
                                            //       echo $row['max_price'];
                                            //       if ($row['min_price'] == 0 || $row['min_price'] > 0) {
                                            //             echo " " . $row['min_price'];
                                            //             if ($row['max_price'] != 0) {
                                            //                   echo " - " . $row['max_price'];
                                            //             }
                                            //       }
                                            // }

                                            // if ($row['min_price'] == 0 && $row['max_price'] > 0) {
                                            //     echo $row['max_price'];
                                            // } else if ($row['min_price'] > 0 && $row['max_price'] == 0) {
                                            //     echo $row['min_price'];
                                            // } else if ($row['min_price'] > 0 && $row['max_price'] > 0) {
                                            //     echo $row['min_price'] . " - "  . $row['max_price'];
                                            // }

                                            if ($row['min_price'] == 0 && $row['max_price'] > 0) {
                                                echo $row['min_price'] . " - "  . $row['max_price'];
                                            } else if ($row['min_price'] > 0 && $row['max_price'] == 0) {
                                                echo $row['min_price'];
                                            } else if ($row['min_price'] > 0 && $row['max_price'] > 0) {
                                                echo $row['min_price'] . " - "  . $row['max_price'];
                                            } else if ($row['min_price'] == 0 && $row['max_price'] == 0) {
                                                echo $row['min_price'] . " - "  . $row['max_price'];
                                            }

                                            ?>
                                            / <?php echo $row['unit'] ?>
                                        </span>
                                    </h5>

                                    <div class="start-wrap">
                                        <div class="rating-start" title="Rated 5 out of 5">
                                            <span style="width: 80%"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="widget-bg booking-form-wrap">
                                                      <h4 class="bg-title">Booking</h4>
                                                      <form class="booking-form">
                                                            <div class="row">
                                                                  <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                              <input name="name_booking" type="text"
                                                                                    placeholder="Full Name">
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                              <input name="email_booking" type="text"
                                                                                    placeholder="Email">
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                              <input name="phone_booking" type="text"
                                                                                    placeholder="Number">
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                              <input class="input-date-picker"
                                                                                    type="text" name="s"
                                                                                    autocomplete="off"
                                                                                    readonly="readonly"
                                                                                    placeholder="Date">
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                        <h4 class="">Add Options</h4>
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                              <label class="checkbox-list">
                                                                                    <input type="checkbox" name="s">
                                                                                    <span
                                                                                          class="custom-checkbox"></span>
                                                                                    Tour guide
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                              <label class="checkbox-list">
                                                                                    <input type="checkbox" name="s">
                                                                                    <span
                                                                                          class="custom-checkbox"></span>
                                                                                    Insurance
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                              <label class="checkbox-list">
                                                                                    <input type="checkbox" name="s">
                                                                                    <span
                                                                                          class="custom-checkbox"></span>
                                                                                    Dinner
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                              <label class="checkbox-list">
                                                                                    <input type="checkbox" name="s">
                                                                                    <span
                                                                                          class="custom-checkbox"></span>
                                                                                    Bike rent
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                        <div class="form-group submit-btn">
                                                                              <input type="submit" name="submit"
                                                                                    value="Boook Now">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </form>
                                                </div> -->

                                <div class="widget-bg widget-table-summary">
                                    <h4 class="bg-title">Monument Details</h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Location</strong>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row["location"] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Timings</strong>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row["timings"] ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>City</strong>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row["city"] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Entry</strong>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row["entry"] ?>

                                                </td>
                                            </tr>
                                            <tr class="total">
                                                <td>
                                                    <strong> Day Closed</strong>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row["day closed"] ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="widget-bg widget-table-summary">
                                    <h4 class="bg-title">Ticket Details</h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Indian / National</strong>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row["PIO"] ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Foreigner / NRI</strong>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row["NRI"] ?>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <?$subject = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
                          $subject=str_ireplace("%20","",$subject);
                          echo $subject=str_ireplace(".php","",$subject);?>
                                <a href="tourist_booking1.php?varname=<?php echo $subject ?>">
                                <div class="widget-bg widget-table-summary">
                                    <h4 class="bg-title">Book Now</h4>
                                </div>
                            </a>

                                <!-- <div class="widget-bg information-content text-center">
                                                      <h5>TRAVEL TIPS</h5>
                                                      <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                                                      <p>Mollit voluptatem perspiciatis convallis elementum corporis quo
                                                            veritatis aliquid blandit, blandit torquent, odit placeat.
                                                      </p>
                                                      <a href="#" class="button-primary">GET A QUOTE</a>
                                                </div> -->



                                <div class="travel-package-content text-center" style="background-image: url(assets/images/img11.jpg);">

                                    <!-- $sql = "SELECT m_name FROM delhi_monuments"; -->
                                    <!-- $execute_result =  mysqli_query($conn, $sql); -->
                                    <!-- if (mysqli_num_rows($execute_result) > 1) { -->
                                    <!-- $count = 2; -->
                                    <!-- while ($row = mysqli_fetch_assoc($execute_result)) { -->
                                    <!-- if($count <=4){ -->
                                    <!-- echo $row["m_name"] . "<br>"; -->
                                    <!-- $count++; -->
                                    <!-- } -->
                                    <!-- else { -->
                                    <!-- break; -->
                                    <!-- } -->
                                    <!-- } -->
                                    <!-- } else { -->
                                    <!-- echo "Data not available."; -->
                                    <!-- } -->

                                    <h5>MORE DESTINATIONS</h5>
                                    <h3>OTHER MONUMENTS</h3>
                                    <p>India is a land of diverse cultural heritage and architectural wonders</p>
                                    <ul>

                                        <?php
                                        include 'connection.php';
                                        $sql = "SELECT m_name FROM Monument_Details WHERE m_name != '$subject' ";
                                        $exe_result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($exe_result) > 0) {
                                            $count = 0;
                                            while ($row = mysqli_fetch_assoc($exe_result)) {
                                                if ($count < 4) {
                                                    echo "<li>" . "<a href=`#`>" . "<i class=`far fa-arrow-alt-circle-right`>" . "</i>" . $row["m_name"] . "</a>" . "</li>" . "<br>";
                                                    $count++;
                                                } else {
                                                    break;
                                                }
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                        <!-- <li>
                                                                  <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Qutab Minar</a>
                                                            </li> -->
                                        <!-- <li>
                                                                  <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Akshardham</a>
                                                            </li>
                                                            <li>
                                                                  <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Humayun Tomb</a>
                                                            </li>
                                                            <li>
                                                                  <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Safdarjung’s Tomb</a>
                                                            </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe section html start -->
           
            <!-- subscribe html end -->
        </main>
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- header html end -->
    </div>

    <!-- JavaScript -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="assets/js/jquery.counterup.js"></script>
    <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/custom.min.js"></script>
</body>

<?php
include "footer.php";
?>

</html>