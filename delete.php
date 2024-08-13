<?php
include 'database/session.php';
?>

<?php
include "database/config.php";
?>

<?php
$usersess = $_SESSION["userdata"]["id"];
?>

<?php
$id = $_GET["id"];

$deletepost = "DELETE FROM schedulewaste WHERE id = $id AND iscompleted=0 AND user=$usersess ";
$querydeletepost = $conn->query($deletepost);
if($querydeletepost == TRUE){
    header("location: pendingwaste.php");
}