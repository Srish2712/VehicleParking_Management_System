<!DOCTYPE html>
<head>
<title>Vehicle Details Input</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('include/head.php');
	?>
	
</head>
<body>
	<section id="container">
	<?php
			include('include/header.php');
						
	?>
	
	<section id="content">
	
	<form class="box login" action="process-book-1.php" method="post">

	<fieldset class="boxBody">
	<label><strong>Describe your Vehicle</strong></label>
	<hr />
	  <label>Model</label>
	  <input type="text" tabindex="1" name="model" placeholder="eg. Toyota,Hyundai,etc" required>
	  <label>Vehicle Type</label>
	   <select name="vehicle" class="cjComboBox" >
			<option value="volvo">Car</option>
			<option value="saab">Scooter</option>
			<option value="saab">Bike</option>
			</select>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed" tabindex="4">
	  <?php
	  ?>
	</footer>
</form>	
	</section>
	</section>
	
</body>
</html>