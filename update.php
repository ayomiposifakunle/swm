<?php
include 'database/session.php';
?>

<?php
include "database/config.php";
?>

<?php
$usersess = $_SESSION["userdata"]["id"];
$id = $_GET["id"];
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['type']) && !empty($_POST['number']) && !empty($_POST['location']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['description'])){
        $typer = $_POST['type'];
        $numberr = $_POST['number'];
        $locationer = $_POST['location'];
        $dater = $_POST['date'];
        $timer = $_POST['time'];
        $descriptioner = $_POST['description'];
        $usersess = $_SESSION["userdata"]["id"];

$update = "UPDATE `schedulewaste` SET `type`='$typer',`number`=$numberr,`location`='$locationer',`date`='$dater',`time`='$timer',`description`='$descriptioner' WHERE id = $id AND iscompleted=0 AND user=$usersess";
$updateq = $conn->query($update);
if($updateq == TRUE){
    echo '<script> alert("USER DETAILS SUCCESSFULLY UPDATED"); </script>';
header("location: pendingwaste.php");
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
    <!-- old details -->
<section class="container-fluid" style="margin-top: 5%; background-color: whitesmoke; border-radius: 10px; margin-bottom: 10%;">
    <h2 class="text-center fw-heavy">OLD DETAILS</h2>
        <div class="col-md-2 mb-4">
        <?php
$data = "SELECT * FROM schedulewaste WHERE id = $id AND iscompleted=0 AND user=$usersess";
$dataq = $conn->query($data);
$info = $dataq->fetch_assoc();
?>
 <form action="" method="post">
    <label for=""> Type of Waste: 
     <select name="type" id="" style="width: 100%;">
      <option value="<?php echo $info['type'] ;?>"><?php echo $info['type'] ;?></option>
        </select> 
      </label> <br> <br>

<label for=""> Quantity:
    <select name="type" id="" style="width: 100%;">
      <option value="<?php echo $info['number'] ;?>"><?php echo $info['number'] ;?></option>
        </select> 
</label> <br> <br>

<label for=""> Location:
    <select name="type" id="" style="width: 100%;">
      <option value="<?php echo $info['location'] ;?>"><?php echo $info['location'] ;?></option>
        </select> 
</label> <br> <br>

<label for=""> Date:
    <select name="type" id="" style="width: 100%;">
      <option value="<?php echo $info['date'] ;?>"><?php echo $info['date'] ;?></option>
        </select>
</label> <br> <br>

<label for=""> Time:
    <select name="type" id="" style="width: 100%;">
      <option value="<?php echo $info['time'] ;?>"><?php echo $info['time'] ;?></option>
        </select>
</label> <br> <br>

<label for=""> Description:
      <p><small><?php echo $info['description'] ;?></small></p> 
</label> 
          </form>
        </div>
    </section>

    <!-- new details -->
    <section class="mt-5">
    <h2 class="text-center fw-heavy">NEW DETAILS</h2>
    <form action="" method="post">
    <label for=""> Select Type of Waste: 
     <select name="type" id="" style="width: 100%;">
      <option value="plastic">Plastic</option>
      <option value="glass">Glass</option>
      <option value="metal">Metal</option>
      <option value="paper">Paper</option>
      <option value="other">Other</option>
        </select> 
      </label> <br> <br>

<label for=""> Quantity:
  <input type="number" name="number" id="" min="1" placeholder="select a number minimum of 1">
</label> <br> <br>

<label for=""> Location:
<select name="location" id="" style="width: 100%;">
  <option value="chrislanduniversity"> Chrisland University (Default) </option>
</select>
</label> <br> <br>

<label for=""> Date:
  <input type="date" name="date" id="" min="1">
</label> <br> <br>

<label for=""> Time:
  <input type="time" name="time" id="" min="1">
</label> <br> <br>

<label for=""> Description:
  <textarea name="description" id="" cols="70" rows="3" style="width: 100%;" placeholder="additional information can be included here"></textarea>
</label> 

<div class="d-flex ">
              <button style="background-color: red;" name="submit">
                UPDATE
              </button>
            </div>
          </form>
</section>
</body>
</html>