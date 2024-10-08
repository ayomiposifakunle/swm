<?php
include '../database/session.php';
?>

<?php
if($_SESSION["userdata"]["id"] != "17"){
  header("location: ../map.php");
}
?>

<?php
include '../database/config.php';
?>

<!-- <?php
$userinfo = "SELECT * FROM schedulewaste WHERE iscompleted=1";
$userinfoq = $conn->query($userinfo);
?> -->

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
    <main>
    <a href="./dashboard.php"><span class="material-symbols-outlined" style="color: red;">
      arrow_back
      </span></a>
      <div class="detail-box">
            <h2 class="text-center text-danger">
            Waste Successfully Deposited
            </h2>
      </div>
    <table class="table">
<thead>
<tr>
    <th>S/N</th>
    <th>Type of Waste</th>
    <th>Quantity</th>
    <th>Location</th>
    <th>Date</th>
    <th>Time</th>
    <th>Description</th>
</tr>
</thead>
<tbody>
<?php
$sn = 1;
while($pending = $userinfoq->fetch_assoc()){
    ?>
<tr>
    <td><?php echo $sn++;?></td>
    <td><?php echo $pending['type']; ?></td>
    <td><?php echo $pending['number']; ?></td>
    <td><?php echo $pending['location']; ?></td>
    <td><?php echo $pending['date']; ?></td>
    <td><?php echo $pending['time']; ?></td>
    <td><?php echo $pending['description']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
    </main>

    </body>
</html>