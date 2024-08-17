<?php
include 'database/session.php';
?>

<?php
include 'database/config.php';
?>

<?php
$userinfo = "SELECT * FROM users";
$userinfoq = $conn->query($userinfo);
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

  <title>SWM Homepage</title>

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
<a href="./admin/dashboard.php"><span class="material-symbols-outlined" style="color: red;">
      arrow_back
      </span></a> 
      <div class="detail-box">
            <h2 class="text-center text-danger">
            Registered Users
            </h2>
      </div>
    <table class="table mt-5">
        <thead>
<tr>
    <th>Name</th>
    <th>E-mail</th>
    <th>Matric number</th>
</tr>
        </thead>
        <tbody>
<?php 
while($users = $userinfoq->fetch_assoc()){
    ?>
<tr>
    <td><?php echo $users['name']; ?></td>
    <td><?php echo $users['email']; ?></td>
    <td><?php echo $users['matricnumber']; ?></td>
</tr>
<?php
}
?>
        </tbody>
    </table>
</body>
</html>