<!-- <?php
include 'database/session.php';
?> -->

<!-- <?php
include 'database/config.php';
?>

<?php
$x = "SELECT * FROM users WHERE  ";
$xquery = $conn->query($x);

?> -->

<!DOCTYPE html>
<html lang="en">
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
      
        <title>forgotpassword</title>
      
        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <!-- font awesome style -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
      
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
      </head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container" style="display: flex; justify-content: space-between;">
      <a class="navbar-brand" href="index.php">
        <span>
         <img src="./images/Untitled-2 (3).png" alt="" style="width: 70px; height: 70px;">
        </span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav" style="margin: 0 auto;">
          <li class="nav-item active m-1">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item m-1">
            <a class="nav-link" href="map.php"> Map</a>
          </li>
          <li class="nav-item m-1">
            <a class="nav-link" href="contact.php">Report/Feedback</a>
          </li>
        </ul>
      </div>

      <a class="nav-link" href="login.php"><span class="material-symbols-outlined">
       passkey
       </span></a>
    </nav>
  </div>
 
		 <!-- contact section -->
 <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
      <img src="./images/Untitled-2 (4).png" alt="" class="text-center" style="width: 100px; height: 100px; margin: 0 auto;">
      </div>
      <div class="container-fluid">
          <form action="" method="post">
            <div>
              <input type="text" placeholder="Enter your matric number" />
            </div>
            <!-- <div>
              <input type="password" placeholder="Enter your password" />
            </div> -->
            <div class="d-flex ">
              <button style="background-color: rgb(240, 42, 42); width: max-content; border-radius: 15px; margin: 0 auto; color: black; font-weight: heavy; margin-top: 10px;">
             Get New Password
              </button>
            </div>
          </form>
        </div>
    </div>
  </section>
  <!-- end contact section -->
	
	
	  <script src="js/jquery-3.4.1.min.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
	  </script>
	  <script src="js/custom.js"></script>
</body>
</html>