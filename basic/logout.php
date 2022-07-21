<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['phone'])) {

session_unset(); 

}
header("Location: ../index.php"); 
?>