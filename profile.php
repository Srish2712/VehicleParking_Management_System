<!DOCTYPE html>
<head>
<title>My Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('include/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('include/header.php');
			include('include/connect.php');
						
	?>
	
	<section id="content">
	<div class="profile">
		<div class="avator"><span>Change Profile pic</span></div>
		<div class="edit tooltip" title="Edit Your Profile"><img src="src/edit.png" />


		</div>
		<?php
			
			$password=$_SESSION['password'];
			$phone=$_SESSION['phone'];
			$query = "select * from users where password='$password' AND phone='$phone'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
			
		?>
		<div class="dt name">NAME: <span><?php  echo $rows['name'];  ?></span></div>
		<div class="dt phone">PHONE: <span><?php  echo $rows['phone'];  ?></span></div>
		<div class="dt id">ID. NO: <span><?php  echo $rows['id_no'];  ?></span></div>
		<div class="dt plate">VEHICLE PLATE NO: <span><?php  echo $rows['plate_no'];  ?></div>
		<button style="display:none">Save Changes</button>
		<div id="status"></div>
		<?php  } ?>
	</div>
	</section>
	</section>
</body>
</html>