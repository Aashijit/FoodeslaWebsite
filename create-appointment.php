<?php

    try{
        $conn = new mysqli('localhost', 'root', '', 'foodesla_group');
    }catch(Exception $es){
        error_log($es);
    }
   
    $appointment_date = $_POST['book-date'];
    $appointment_time = $_POST['book-time'];
    
    $parsedDate = date_create($appointment_date);

    $dateToDisplay = date_format($parsedDate,'D : d M Y');

    $parsedTime = date_create($appointment_time);
    $timeToDisplay = date_format($parsedTime,"h:i a");
   

   
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = sprintf("INSERT INTO `appointment`(`APPOINTMENT_DATE`, 
    `APPOINTMENT_TIME`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NUMBER`, 
    `EMAIL_ID`, `SUBJECT`, `MESSAGE`) 
    VALUES ('%s','%s','%s','%s','%s','%s','%s','%s')",$appointment_date, 
    $appointment_time, $first_name, $last_name, $phone, $email, $subject, $message);

    $conn->query($sql);
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Foodesla</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/image/logo.jpg" rel="icon">
  <link href="assets/image/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

  <style>
     body {
      background-color: #fff;
    }
    #main {
      color: black;

    }
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">post@foodesla.com</a></li>
          <li><i class="icofont-phone"></i> +1 5589 55488 55</li>
          <li><i class="icofont-phone"></i> +47 468 98 091</li>
        </ul>

      </div>
      <!-- <div class="cta">
        <a href="#about" class="scrollto">Get Started</a>
      </div> -->
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Foodesla</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/image/logo.jpg" alt="" class="img-fluid"></a>

      </div>
      <div class="ml-2 mr-auto text-left">
        <h4><a href="index.html"> FOODESLA</a></h3>
        <small class="pb-4">Helping you make the right move</small>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <!-- <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li> -->
          <li ><a href="booking.html">Book online</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#contact">Contact</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html" style="color: black;">Home</a></li>
          <li>Online Booking</li>
        </ol>
        <h2>Approval</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Booknow Section ======= -->
    <section class="approval">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h4>Your request has been sent for approval!</h4>
                    <small>The request response will be sent to your email.</small>

                    <div class="my-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-body">
                                    <h2><?php echo $dateToDisplay; ?></h2>
                                    <h4><?php echo $timeToDisplay; ?></h4>
                                    <div title="Add to Calendar" class="addeventatc">
    Add to Calendar
      <span class="start"><?php echo $appointment_date.' '.$appointment_time; ?></span>
      <span class="end"><?php echo $appointment_date.' '.$appointment_time; ?></span>
      <span class="timezone">America/Los_Angeles</span>
      <span class="title">Summary of the event</span>
      <span class="description">Description of the event</span>
      <span class="location">Location of the event</span>
    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="card card-body">
                                    <p class="status">Pending - Granite</p> 
                                    <p>Client Name</p>
                                    <small>The link to this zoom meeting will be in your confirmation email.</small>
                                </div>
                            </div> -->
                        </div>
                       
                    </div>
                </div>
            </div>
         
        </div>
    </section>



    <!-- End Booknow Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="section-bg">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-6 footer-contact">
              <h3>Foodesla</h3>
              <p>
                ALindeberglia 36,  
                1069 Oslo,
                Norway <br><br>
                <strong>Phone:</strong> +43 660 365 1996 <br>
                <strong>Phone:</strong> +47 468 98 091 <br>

                <strong>Email:</strong> post@foodesla.com<br>
              </p>
            </div>

            <div class="col-lg-4 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
              </ul>
            </div>

            <!-- <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              </ul>
            </div> -->

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>What to book more?</h4>
              <p>Please contact us for further consultation.</p>
              <div class="book">
                <a href="book-services.html">Book now!</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

 
    

    
    <div style=" color: rgba(255, 255, 255, 0.945);
    background: #161616;">
         <div class="container d-lg-flex py-4" >

          <div class="mr-lg-auto text-center text-lg-left">
            <div class="copyright">
              &copy; Copyright  <strong><span>Foodesla</span></strong>. All Rights Reserved 2020
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
            </div>
          </div>
          <!-- <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div> -->
        </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>