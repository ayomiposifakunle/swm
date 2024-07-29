<?php
include 'database/session.php';
?>

<?php
include 'database/config.php';
?>

<?php
$id = $_GET['id'];

$delete = "DELETE FROM `schedulewaste` WHERE id=$id";
$userinfoq = $conn->query($delete);
if($userinfoq == TRUE){
    echo '<script>alert("Waste Deposit Deleted");</script>';
    header("location: completedwaste.php");
}
?>