<?php

$from=$_POST['from'];
$to=$_POST['to'];

session_start();

$_SESSION["from"] = $from;
$_SESSION["to"] = $to;

header("location:process-book.php");

?>