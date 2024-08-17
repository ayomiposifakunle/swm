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
$page = 'map';
?>

<?php
$realdate = date("Y-m-d");
$userinfo = "SELECT date FROM schedulewaste WHERE user=$usersess AND iscompleted=0";
$userinfoq = $conn->query($userinfo);
$num = $userinfoq->num_rows;
while($data = $userinfoq->fetch_assoc()){
  $dateinfo = $data['date'];
}
if($realdate == $dateinfo){
  echo '<script> alert("you have a disposal schedule today, view pending deposits in your dashboard"); </script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
  <?php include './sections/head.php'; ?>
<body>
<?php include './sections/nav.php'; ?>
<!-- header -->
  <section class="container" style="margin-top: 5%; background-color: whitesmoke; border-radius: 10px; margin-bottom: 10%;">
  <?php
$data = "SELECT * FROM users WHERE id=$usersess";
$dataq = $conn->query($data);
$info = $dataq->fetch_assoc();
?> 
  <marquee class="text-center fw-heavy">WELCOME TO YOUR DASHBOARD <span style="color: red;"><?php echo$info['name'];?></span></marquee>
      <div class="row">
        <div class="col-md-2 mb-4">
          <img src="<?php echo 'uploads/'.$info['image']; ?>" alt="" style="height: 10rem; width: 10rem; border-radius: 25%;" >
        </div>
        <div class="col-md-9">
  <p>Username: <?php echo $info['name'];?></p>
  <p>E-mail:<?php echo $info['email']; ?></p>
  <p>Notifications:
  <button onClick="on();">on</button>
  <button onClick="off();">off</button>
    </form>
  </p>
  <p>Rewards:<?php
            $completed = "SELECT * FROM schedulewaste WHERE iscompleted=1 AND user=$usersess";
$completedq = $conn->query($completed);
if($completedwaste=$completedq->num_rows){
  echo $completedwaste*5;
}else{
  echo '0';
}
?>   points</p>
  <a href="edituser.php?id=<?php echo $usersess; ?>" style="text-decoration: none; color: red;">update personal informations</a> <br>
  <br> <span class="material-symbols-outlined text-danger">
lock_person
</span>   <a href="logout.php" style=" color: red">Logout</a>
        </div>
      </div>
    </section>
<!-- end of header-->

 <!-- service section -->
 <section class="service_section layout_padding" style="margin-bottom: 10%;">
  <div class="container">
    <div class="heading_container heading_center">
      <h2 style="font-size: 6vh;"> WASTE DEPOSIT INFORMATION</h2>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box ">
          <div class="img-box">
            <img src="images/s1.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
            Current Waste Report
            </h5>
            <p>
            <?php
$pending = "SELECT * FROM schedulewaste WHERE iscompleted=0 AND user=$usersess";
$pendingq = $conn->query($pending);
if($pendingwaste=$pendingq->num_rows){
  echo $pendingwaste;
}else{
  echo '0';
}
?>
         <br> <br> <a href="./pendingwaste.php">View Pending Deposits</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box ">
          <div class="img-box">
            <img src="images/s2.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
            Waste Successfully Deposited
            </h5>
            <p>
              <?php
            $completed = "SELECT * FROM schedulewaste WHERE iscompleted=1 AND user=$usersess";
$completedq = $conn->query($completed);
if($completedwaste=$completedq->num_rows){
  echo $completedwaste;
}else{
  echo '0';
}
?>   
            <br> <br> <a href="./completedwaste.php">View Completed Deposits</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="contact.php" class="bg-danger">
      Report Waste Issue
      </a>
    </div>
  </div>
</section>
<!-- end service section -->


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
  // 1800000
  function on(){
    alert('notification is on');
document.getElementById("not").style.display = "block";
  }


  function off(){
    alert('notification is OFF');
    document.getElementById("not").style.display = "none";
  }

  setTimeout(freqnot2, 1000);
  // setTimeout(freqnot2, 3000);
  // setTimeout(freqnot3, 5000);
  // setTimeout(freqnot4, 7000);
  function freqnot1(){
alert('Thank you for using this site, Remember to always properly dispose waste in a thrash');
  }
  function freqnot2(){
    alert('Earn 5 points for each completed waste deposit, Check dashboard for information on pending and completed wastes');
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
  <script src="./js/activelink.js"></script>
</body>
</html>