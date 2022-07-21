<!DOCTYPE html>
<head>
<title>Parking Zones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('include/head.php');
			include('include/connect.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('include/header.php');
						
	?>
	
	<section id="content">
	<img style="position:absolute; z-index:-1; margin:0;"/>
	<p class="phead">Parking Lots Status</p>
	
	
	<div class="strt">
	<p>Adarsh Nagar</p>
	<table class="gridtable">
<?php $street ="Adarsh Nagar"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P1' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P1</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P10' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P10</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P2' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P2</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P11' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P11</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P3' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P3</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P12' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P12</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P4' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P4</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P13' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P13</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P5' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P5</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P14' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P14</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P6' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P6</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P15' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P15</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P7' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P7</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P16' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>P16</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P8' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P8</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P17' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P17</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P9' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P9</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P18' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P18</td>
</tr>
</table>
	
	</div>
	
	
	<div class="strt">
	<p>Prem Nagar</p>
	<table class="gridtable">
<?php $street ="Prem Nagar"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P1' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P1</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P10' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P10</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P2' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P2</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P11' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P11</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P3' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P3</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P12' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P12</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P4' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P4</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P13' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P13</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P5' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P5</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P14' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P14</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P6' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P6</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P15' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P15</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P7' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P7</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P16' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>P16</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P8' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P8</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P17' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P17</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P9' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P9</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='P18' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>P18</td>
</tr>
</table>
	
	</div>
	<p class="status">Red means the parking slot is reserved , White means the parking slot is available</p>
	
	</section>
	</section>
	
</body>
</html>