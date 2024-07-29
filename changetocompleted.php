<?php
include 'database/session.php';
?>

<?php
include 'database/config.php';
?>

<?php
$id = $_GET['id'];

$update = "UPDATE schedulewaste SET iscompleted=1 WHERE id=$id";
$userinfoq = $conn->query($update);
if($userinfoq == TRUE){
    echo '<script>alert("Waste Deposit Is Completed");</script>';
    header("location: completedwaste.php");
}
?>