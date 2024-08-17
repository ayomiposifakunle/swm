<?php
include 'database/config.php';
?>


<?php
if(isset($_POST["signup"])){
  if(!empty($_POST["name"]) && !empty($_POST["email"] && !empty($_POST["matricnumber"]) && !empty($_POST["password"]) && !empty($_FILES["pimage"]))){
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $matricnumber = trim($_POST["matricnumber"]);
    $password = trim($_POST["password"]);
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $pimage = $_FILES["pimage"]["name"];
    
    $insert = "INSERT INTO users(name, email, matricnumber, password, image) VALUES('$name', '$email', '$matricnumber', '$hashedpassword', '$pimage')";
    $insertq = $conn->query($insert);
    if($insertq == TRUE){
      echo 'new user created succcessfully, please kindly proceed to login with your details';
      header('location: login.php');
      move_uploaded_file($_FILES["pimage"]["tmp_name"], "uploads/".$_FILES["pimage"]["name"]);
    } else{
      echo 'issue creating new user account';
    }
  } else {
    echo 'please fill in all fields';
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

    <!-- contact section -->
 <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
		<a href="./login.php"><span class="material-symbols-outlined" style="color: red;">
			arrow_back
			</span></a>
      <img src="./images/Untitled-2 (4).png" alt="" class="text-center" style="width: 100px; height: 100px; margin: 0 auto;">
	  <p style="text-align: center;">already have an account?, you can <a href="login.php" style="color: red; text-align: center; text-decoration: none;">Sign-in</a></p>  
	</div>
      <div class="container-fluid">
          <form action="" method="post" enctype="multipart/form-data">
          <div>
              <input type="file" placeholder="Choose a profile picture" name="pimage"/>
            </div>
            <div style="margin-top: 10px;">
                <input type="text" placeholder="Input name" name="name" />
              </div>
              <div style="margin-top: 10px;">
                <input type="email" placeholder="Input email" name="email"/>
              </div>
            <div style="margin-top: 10px;">
              <input type="text" placeholder="Input matric number" name="matricnumber" />
            </div>
            <div style="margin-top: 10px;">
              <input type="password" placeholder="Input password" name="password"/>
            </div>
            <div class="d-flex ">
              <button style="background-color: rgb(240, 42, 42); width: max-content; border-radius: 15px; margin: 0 auto; color: black; font-weight: heavy; margin-top: 10px;;" name="signup">
             Register
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