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

  <title>TTU Events System | About us</title>

<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <link href="css/modern-business.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <?php include('includes/header.php'); ?>
  <!-- Page Content -->
  <div class="container">

    <?php
    $pagetype = 'aboutus';
    $query = mysqli_query($con, "select PageTitle,Description from tblpages where PageName='$pagetype'");
    while ($row = mysqli_fetch_array($query)) {

    ?>
    
        <h1 class="mt-4 mb-3"><b><?php echo htmlentities($row['PageTitle']) ?></b>

        </h1>
      
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
      <div class="col-lg-6">
     
                    <!-- <img class="img-fluid rounded mb-4" src="assets/img/Tulips.jpg" alt="School pic" style="width:100%;"> -->
           <!-- <center>   <img src="images/download (4).jfif" alt="TTU" width=100% height=100% ></center> -->
              
               </div>
        <div >

          <p><?php echo $row['Description']; ?></p>
        </div>
      </div>
      <!-- /.row -->
    <?php } ?>

  </div>
  <!-- /.container -->

 
 


  <?php include('includes/footer.php'); ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>