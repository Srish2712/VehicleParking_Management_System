<?php

$model=$_POST['model'];
$vehicle=$_POST['vehicle'];

session_start();

$_SESSION["model"] = $model;
$_SESSION["vehicle"] = $vehicle;

header("location:parking_space.php");

?>