<?php

$street=$_POST['street'];
$plot=$_POST['plot'];
$plateno=$_POST['plateno'];
$account=$_POST['account'];

session_start();

$_SESSION["street"] = $street;
$_SESSION["plot"] = $plot;
$_SESSION["plateno"] = $plateno;
$_SESSION["account"] = $account;

header("location:dates.php");

?>