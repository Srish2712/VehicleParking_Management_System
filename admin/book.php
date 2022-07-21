<!DOCTYPE html>
<head>
<title>Booking Parking Lot</title>
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
	<p class="phead"> Booking Parking Lot</p>
	<div id="book" class="p1">
	<?php  
			$query = "select * from streets where street='c'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
			echo '<p>Adarsh Nagar : '.$rows['available'].' Parking Lot Available</p>';
			}
			$query = "select * from streets where street='Prem Nagar'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
			echo '<p>Prem Nagar : '.$rows['available'].' Parking Lot Available</p>';
			}
	?>
		
		
	</div>
	<form id="book" action="proc/book.php" method="POST">
		<label>Select street:</label>
		
				<select name="street">
					<option value="Adarsh Nagar>Adarsh Nagar</option>
					<option value="Prem Nagar">Prem Nagar</option>
				  
				</select>
		
		<input type="submit" name="submit" value ="BOOK NOW" style="margin-left:50px; margin-top:5px; padding:3px;" />
	</form>
	<div id="book">
		<p>Parking fees: Rs 60/- non-refundable.</p>
		
	</div>
	</section>
	</section>
</body>
</html>