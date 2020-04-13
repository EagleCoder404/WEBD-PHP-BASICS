<?php
session_start();
$user = $_POST['user'];
$_SESSION['user']=$user;
header("Location:home.php");
die();
 ?>
