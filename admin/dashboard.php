<?php
include '../database/session.php';
?>

<?php
include '../database/config.php';
?>

<?php
$select = "SELECT * FROM users";
$selectq = $conn->query($select)
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SWM Homepage</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />

  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style>
    /* @media screen and (max-width: 500px) {
     .detail-box > h1 {
    color: blue;
    }
    } */

    /* @media screen and (max-width: 500px) {
      .detbox {
       color: blue;
    }
  } */

  /* @media screen and (max-width: 500px) {
    .detbox{
      color: blue;
    }
  } */
  </style>
</head>
<body>
 <

    <!-- main -->
<main style="margin-bottom: 3%">
<section class="service_section layout_padding" style="margin-bottom: 10%;">
  <div class="container">
    <div class="heading_container heading_center">
      <h2 style="font-size: 6vh;">ADMIN DASHBOARD</h2>
    </div>
    <div class="row">
      <div class="col-sm-4 col-md-4 mx-auto">
        <div class="box ">
          <div class="img-box">
            <img src="images/s1.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              Total Registered Users
            </h5>
            <p>
            <?php 
            if($users = $selectq->num_rows){
              echo $users;
            }
            ?>
         <br> <br> <a href="../regusers.php">View Registered Users</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 mx-auto">
        <div class="box ">
          <div class="img-box">
            <img src="images/s1.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              Pending Waste Deposits
            </h5>
            <p>
            <?php
            $pend = "SELECT * FROM schedulewaste WHERE iscompleted=0";
$pendingq = $conn->query($pend);
if($pendingwaste=$pendingq->num_rows){
  echo $pendingwaste;
}else{
  echo '0';
}
?>   
         <br> <br> <a href="../admin/pendingwaste.php">View Pending Waste</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 mx-auto">
        <div class="box ">
          <div class="img-box">
            <img src="images/s2.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
             Completed Waste Deposits
            </h5>
            <p>
              <?php
            $completed = "SELECT * FROM schedulewaste WHERE iscompleted=1";
$completedq = $conn->query($completed);
if($completedwaste=$completedq->num_rows){
  echo $completedwaste;
}else{
  echo '0';
}
?>   
            <br> <br> <a href="../admin/completedwaste.php">View Completed Deposits</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-box"><a href="../index.php" class="bg-danger">Go to Homepage</a></div>
  </div>
</section>

</main>


  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="../js/custom.js"></script>

</body>

</html>
