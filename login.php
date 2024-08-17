 <?php
session_start();
?>

<?php
include 'database/config.php';
?>

<?php
if(isset($_POST["login"])){
	if(!empty($_POST["matricnumber"] && !empty($_POST["password"]))){
		$matricnumber = trim($_POST["matricnumber"]);
		$password = trim($_POST["password"]);
	
		$login = "SELECT * FROM users WHERE matricnumber='$matricnumber'";
		$loginq = $conn->query($login);
		if($loginq->num_rows > 0){
			$userdata = $loginq->fetch_assoc();
			if(password_verify($password, $userdata["password"])){
				$_SESSION["userdata"] = $userdata;
				if($matricnumber == "000" && $password == "admin"){
					header("location: admin/dashboard.php");
				}else{
					header("location: userprofile.php");
				}		
			} else{
				echo '<script> alert("incorrect password"); </script>';
			}
		} else {
			echo '<script> alert("matric number not found, please register"); </script>';
		}
	} else { 
		echo '<script> alert("please fill in all login fields"); </script>';
	}
}
?>

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
	  
		<title>Login</title>
	  
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
	<div id="preloader"></div>


	 <!-- navbar -->
	 <div class="container-fluid bg-danger" style="position:fixed; top: 0px; z-index: 1; color: white;">
		<nav class="navbar navbar-expand-lg custom_nav-container" style="display: flex; justify-content: space-between;">
		  <a class="navbar-brand" href="index.php">
			<span>
			 <img src="./images/Group 48096175.png" alt="" style="width: 70px; ">
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
	  
		  <a class="nav-link" href="login.php" style="color: white;"><span class="material-symbols-outlined">
		   person
		   </span></a>
		</nav>
	  </div>
	  <!-- end of navbar -->
	  

 <!-- contact section -->
 <section class="contact_section layout_padding" style="margin-top: 4%;">
    <div class="container">
      <div class="heading_container">
		<a href="./index.php"><span class="material-symbols-outlined" style="color: red;">
			arrow_back
			</span></a>
      <img src="./images/Untitled-2 (4).png" alt="" class="text-center" style="width: 100px; height: 100px; margin: 0 auto;">
		<p style="text-align: center;">If you don't have an account, register, you can <a href="register.php" style="color: red; text-align: center; text-decoration: none;">Register here</a></p>
      </div>
      <div class="container-fluid">
          <form action="" method="post">
			<div>
              <input type="text" placeholder="Enter your matric number" name="matricnumber" />
            </div>
            <div style="margin-top: 10px;">
              <input type="password" placeholder="Enter your password" name="password" />
            </div>
            <div class="d-flex ">
              <button style="background-color: rgb(240, 42, 42); width: max-content; border-radius: 15px; margin: 0 auto; color: black; font-weight: heavy; margin-top: 10px;" name="login">
              Sign In
              </button>
			<a href="forgotpassword.php" style="color: red; text-decoration: none; display: flex; justify-content: center; font-size: small; margin-top: 3%;">forgot your password</a>
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
	
<script>
	var loader = document.getElementById("preloader");
	window.addEventListener("load", function(){
		loader.style.display = "none";
	})
</script>

<!-- <script>
setTimeout(function() {
	var loader = document.getElementById("preloader");
	window.addEventListener("load", function(){
		loader.style.display = "block";
	})
}, 1000);
</script> -->

</body>
</html>