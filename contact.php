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
// if($sess = 17){
//   header("location: admin/dashboard.php");
// }
?>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(!empty($_POST['type']) && !empty($_POST['number']) && !empty($_POST['location']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['description'])){
$typer = $_POST['type'];
$numberr = $_POST['number'];
$locationer = $_POST['location'];
$dater = $_POST['date'];
$timer = $_POST['time'];
$descriptioner = $_POST['description'];
$usersess = $_SESSION["userdata"]["id"];

$inserttodb = "INSERT INTO `schedulewaste`(`type`, `number`, `location`, `date`, `time`, `description`, `user`) VALUES ('$typer',$numberr,'$locationer','$dater','$timer','$descriptioner', $usersess)";
$inserttodbq = $conn->query($inserttodb);
if($inserttodbq == TRUE){
  echo  '<script>alert("waste disposal schedule successful");</script>';
} else{
  echo  '<script>alert("error");</script>';
}

}else {
    echo '<script>alert("please fill in all fields to schedule a waste deposit");</script>';
  }
}

?>



<!DOCTYPE html>
<html>
<?php include './sections/head.php'; ?>
<body>
<?php include './sections/nav.php'; ?>
  <!-- contact section -->
  <section class="contact_section layout_padding" style="margin-top: 4%;">
    <div class="container">
      <div class="heading_container">
        <h2>
       SCHEDULE A  DATE FOR WASTE DISPOSAL
        </h2>
      </div>
      <div class="container">
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
                SUBMIT REPORT
              </button>
            </div>
          </form>
        </div>
    </div>
  </section>
  <!-- end contact section -->


<!-- info section -->
<section class="info_section bg-danger">
  <div class="container-fluid">
    <div class="info_top mb-5">
      <div class="info_logo">
        <img src="images/Untitled-2 (4).png" alt="" style="width: 10rem;" />
      </div>
      <div class="social_box">
        <a href="#">
          <img src="images/fb.png" alt="">
        </a>
        <a href="#">
          <img src="images/twitter.png" alt="">
        </a>
        <a href="#">
          <img src="images/linkedin.png" alt="">
        </a>
        <a href="#">
          <img src="images/instagram.png" alt="">
        </a>
        <a href="#">
          <img src="images/youtube.png" alt="">
        </a>
      </div>
    </div>

    <div class="info_main">
      <div class="row">
        <div class="col-md-4 col-lg-2 mb-5">
          <div class="info_link-box">
            <h5>
              Useful Link
            </h5>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="map.php">Map </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="contact.php">Report/Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="login.php">Sign-In</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 offset-lg-1 mb-5">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Email">
              <div class="btn-box">
                <button class="btn-box bg-light text-dark mt-1">
                  Subscribe
                </button>
              </div>
       
            </form>
          </div>
        </div>

      <div class="col-md-4">
      <div class="row layout_padding2 info_contact">
<div class="col-md-4">
<a href="#" class="link-box">
  <div class="img-box">
    <img src="images/location.png" alt="">
  </div>
  <div class="detail-box nav-link text-light">
    <h6>
      Location
    </h6>
  </div>
</a>
</div>
<div class="col-md-4">
<a href="#" class="link-box">
  <div class="img-box">
    <img src="images/mail.png" alt="">
  </div>
  <div class="detail-box nav-link text-light">
    <h6>
      E-mail address
    </h6>
  </div>
</a>
</div>
<div class="col-md-4">
<a href="#" class="link-box">
  <div class="img-box">
    <img src="images/call.png" alt="">
  </div>
  <div class="detail-box nav-link text-light">
    <h6>
      Call-line
    </h6>
  </div>
</a>
</div>
      </div>
    </div>
      </div>
      </div>
    </div>
</section>
<!-- end info section -->


<!-- footer -->
<footer class="footer_section bg-danger">
<div class="container">
  <p>
    &copy; SWM<span id="displayDateYear"></span>
</p>
</div>
</footer>
<!-- footer -->

<script>
  //  setTimeout(freqnot1, 1000);
  // // setTimeout(freqnot2, 3000);
  setTimeout(freqnot3, 1000);
  // setTimeout(freqnot4, 7000);
  function freqnot1(){
alert('Thank you for using this site, remember to always dispose waste in a thrash');
  }
  function freqnot2(){
    alert('Remember to always properly dispose waste in a thrash');
  }
  function freqnot3(){
    alert('Schedule a day for waste disposal in the report page, Choose a date and we will remind on the due date');
  }
  function freqnot4(){
    alert('Checkout our map to see the bin nearest to you, you can see more features about our bin in the map page');
  }
</script>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>


</body>

</html>