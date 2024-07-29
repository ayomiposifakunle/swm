<?php
include 'database/session.php';
?>

<?php
include 'database/config.php';
?>

<?php 
$id = $_GET["id"];
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_FILES['image']) && !empty($_POST['username'])){
$image = $_FILES["image"]["name"];
$username = $_POST["username"];

$update = "UPDATE users SET name='$username', image='$image' WHERE id=$id";
$updateq = $conn->query($update);
if($updateq == TRUE){
    echo '<script> alert("USER DETAILS SUCCESSFULLY UPDATED"); </script>';
    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);
}
    } else{
        echo '<script> alert("please fill in all fields in new details"); </script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="900; login.php" />
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <title>dashboard</title>
      
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


<!-- header -->
  <section class="container" style="margin-top: 5%; background-color: whitesmoke; border-radius: 10px; margin-bottom: 10%;">
    <h2 class="text-center fw-heavy">OLD DETAILS</h2>
        <div class="col-md-2 mb-4">
        <?php
$data = "SELECT * FROM users WHERE id=$id";
$dataq = $conn->query($data);
$info = $dataq->fetch_assoc();
?>
        <p>Username: <?php echo $info['name'];?></p>
        <img src="<?php echo 'uploads/'.$info['image']; ?>" alt="" style="height: 10rem; width: 10rem; border-radius: 25%;" >
        </div>
    </section>

    <section class="mt-5">
    <h2 class="text-center fw-heavy">NEW DETAILS</h2>
    <form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" placeholder="select new image" style="width: 50%;"> <br>
<input type="text" name="username" placeholder="input new username" style="width: 50%;"> <br>
<button style="background-color: rgb(240, 42, 42); width: max-content; border-radius: 15px; margin: 0 auto; color: black; font-weight: heavy;">update</button>
    </form>
</section>
</body>
</html>