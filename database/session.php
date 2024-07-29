<?php
session_start();
$sess = $_SESSION["userdata"]["id"];
if(!isset($sess)){
    header("location: login.php");
}
?>