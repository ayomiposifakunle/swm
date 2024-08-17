<?php
include 'database/session.php';
?>

<?php
if($_SESSION["userdata"]["id"] == "17"){
  header("location: admin/dashboard.php");
}
?>

<?php
include 'database/config.php';
?>

<?php
$usersess = $_SESSION["userdata"]["id"];
?>

<?php
$userinfo = "SELECT * FROM schedulewaste WHERE iscompleted=0 AND user=$usersess";
$userinfoq = $conn->query($userinfo);
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
    <main>
    <a href="./map.php"><span class="material-symbols-outlined" style="color: red;">
      arrow_back
      </span></a> 
      <div class="heading_container">
      <img src="./images/Untitled-2 (4).png" alt="" class="text-center" style="width: 100px; height: 100px; margin: 0 auto;">
      </div>
      <div class="detail-box">
            <h2 class="text-center text-danger">
            Current Waste Report
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
    <th>update</th>
    <th>Delete</th>
    <th>Change To Completed</th>
</tr>
</thead>
<tbody>
<?php
$sn=1;
while($pending = $userinfoq->fetch_assoc()){
    ?>
<tr>
<td><?php echo $sn++?></td>
    <td><?php echo $pending['type']; ?></td>
    <td><?php echo $pending['number']; ?></td>
    <td><?php echo $pending['location']; ?></td>
    <td><?php echo $pending['date']; ?></td>
    <td><?php echo $pending['time']; ?></td>
    <td><?php echo $pending['description']; ?></td>
    <td><a href="update.php?id=<?php echo  $pending['id'];?>">update</a></td>
    <td><a href="delete.php?id=<?php echo  $pending['id'];?>">delete</a></td>
    <td><a href="./changetocompleted.php?id=<?php echo $pending['id'];?>">change status</a></td>
</tr>
<?php
$realdate = date("Y/m/d");
// echo $pending['date'] ."<br>". $realdate;
// if($pending['date'] == $realdate){
//   echo 'match';
// }
}
?>

<?php

// $realtime = date("h:i");
// echo $realdate. "<br>". $realtime;
?>


</tbody>
</table>
    </main>

</body>
</html>