<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TTU Events System | Contact us</title>
  <link href="images/ttu logo.jpg" rel="icon">

  <link href="css/modern-business.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

     <!-- Vendor CSS Files -->
     <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
     <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
     <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
     <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
     <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
     <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <?php include('includes/header.php'); ?>
  <!-- Page Content -->
  <div class="container">

    <?php
    $pagetype = 'contactus';
    $query = mysqli_query($con, "select PageTitle,Description from tblpages where PageName='$pagetype'");
    while ($row = mysqli_fetch_array($query)) {

    ?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle']) ?>

      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <section id="contact" class="contact">
               <div class="container">
                    
          <!-- <img src=" assets/img/Tulips.jpg" alt="kk" height="20%" width="100%"> -->
                    <div>
                         <!-- <iframe style="border:2; width: 100%; height: 300px;" src=" assets/img/wedding2.jpg" max-height="100" frameborder="0" allowfullscreen></iframe> -->
                         <!-- <img src=" assets/img/wedding2.jpg" " alt="" width="800px" height="500px"> -->
                    </div>

                    <div class="row mt-5">

                         <div class="col-lg-4">
                              <div class="info">
                                   <div class="address">
                                        <i class="icofont-google-map"></i>
                                        <h4>Location:</h4>
                                        <p>
                                          
                                        Takoradi Technical University <br>
                                        P. O. Box 112 <br>
                                        Sekondi.
                                        </p>
                                   </div>

                                   <div class="email">
                                        <i class="icofont-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>ttu@gmail.com</p>
                                   </div>

                                   <div class="phone">
                                        <i class="icofont-phone"></i>
                                        <h4>Call:</h4>
                                        <p>+233 550 100 160</p>
                                   </div>

                              </div>

                         </div>



                         <div class="col-lg-8 mt-5 mt-lg-0">

<form action="email.php" method="post" role="form" class="php-email-form">
     <div class="form-row">
          <div class="col-md-6 form-group">
               <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
               <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
               <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
               <div class="validate"></div>
          </div>
     </div>
     <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
          <div class="validate"></div>
     </div>
     <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
          <div class="validate"></div>
     </div>
     <div class="text-center"><button type="submit">Send Message</button></div>
</form>

</div>

</div>

</div>
</section><!-- End Contact Section -->


      <!-- /.row -->
    <?php } ?>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>