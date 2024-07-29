<?php
$severname = "localhost";
$dbusername = "root";
$password = "";
$dbname = "wastemanagement";

$conn= new mysqli($severname, $dbusername, $password, $dbname);
if($conn->connect_error){
    die("error". $conn->connect_error);
}
?>
