<!DOCTYPE html>
<head>
<title>Contact Us</title>
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
	<div>
		<p class="phead"> Contact Us </p>
		<form id="contact_form" action="basic/contact.php" method="POST">
			<label for="name">Name : <span> <input type="text" name="name" value="" required /> </span></label>
			<label for="email">Your Phone : <span><input type="text" name="phone" value="" required /></span> </label>
			<label for="text">Your message :<span> <textarea name="msg" value="" required></textarea> </span></label>
			<label for="submit"><span><input type="submit" name="submit" value="Submit" required /> </span></label>
		</form>
	</div>	
	</section>
	</section>
	
</body>
</html>