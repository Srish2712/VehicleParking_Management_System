<?php


$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'vpms-sql'; 


$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vpms-sql";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$connect=mysqli_connect("localhost", "root", "", "vpms-sql") or die(mysqli_error());
?>