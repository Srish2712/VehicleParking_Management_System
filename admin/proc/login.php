 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		
}

if (isset($_POST['Submit'])) {
	
	$phone=$_POST['phone'];
	$password=$_POST['password'];

	// To protect MySQL injection for Security purpose

	$phone = stripslashes($phone);
	$password = stripslashes($password);
	$phone = mysql_real_escape_string($phone);
	$password = mysql_real_escape_string($password);

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");

	$db = mysql_select_db("vpms-sql", $connection);

	// SQL query to fetch information of registered users and finds user match.
	$query = mysql_query("select * from users where password='$password' AND phone='$phone'", $connection);
	$rows = mysql_num_rows($query);
	
	$row=mysql_fetch_array($query);
	if ($rows == 1) {
		$_SESSION['phone']=$phone; 
		$_SESSION['password']=$password; 
	$_SESSION['access']=$row['access'];
	if ($row['access']==2){
	header("Location: ../index.php");
	}
	if ($row['access']==1){
	header("Location: ../admin/index.php");
	}
	}
	
	
	
}

//
?>