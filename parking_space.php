<!DOCTYPE html>
<head>
<title>Booking Parking Space</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('include/head.php');
	?>
	<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>
<body>
	<section id="container">
	<?php
			include('include/header.php');
						
	?>
	
	<section id="content">
	<img src="parking.svg" style="position:absolute; z-index:-1; margin:0;"/>
	<form class="box login" action="process-book-2.php" method="post">
	<fieldset class="boxBody">
	<label><strong>Parking Details</strong></label>
	<hr />
	   <label>Recommended Region</label>
	   <select name="street" class="cjComboBox" >
			<option value="ADARSH NAGAR">ADARSH NAGAR - Cars Only</option>
			<option value="PREM NAGAR">PREM NAGAR - Scooters,Bikes and Cars</option>
			
		</select>
		
		<select name="plot" class="cjComboBox" >
			<option value="P1">P1</option>
			<option value="P2">P2</option>
			<option value="P3">P3</option>
			<option value="P4">P4</option>
			<option value="P5">P5</option>
			<option value="P6">P6</option>
			<option value="P7">P7</option>
			<option value="P8">P8</option>
			<option value="P9">P9</option>
			<option value="P10">P10</option>
			<option value="P11">P11</option>
			<option value="P12">P12</option>
		</select>
		
	<label>Plate Number</label>
	  <input type="text" tabindex="3" name="plateno" placeholder="eg. PB 11AC 0123" required>
	  
	<label><strong>Payment Information</strong></label>
	<hr />
	<label>Enter Confirmation:</label>
	<input type="text" name="account" placeholder="Card Number" required title="Credit card number" maxlength="14"/> 
	 
	   <label>Note: Parking Fees: Rs 60 per hour</label>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed to Date & Time" tabindex="4">
	</footer>
</form>
	</section>
	</section>
	
</body>
</html>