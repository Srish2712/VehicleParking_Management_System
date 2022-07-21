<!DOCTYPE html>
<head>
<title>Vehicle Park Management System</title>
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
	<div>
	<p class="phead">Users</p>
	<div style="width:600px;background:white;padding:10px;margin:auto;">
		
						<form method="post" action="delete.php" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                           
                            <thead>
						
                                <tr>
                                    <th>CHK</th>
                                    <th>Name</th>
				    <th>Id No</th>
                                    <th>Phone</th>
                                    <th style="width:100px;">Plate No</th>
                                                             
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							$query=mysqli_query($connect, "select * from users where access='2'")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
							$id=$row['id'];
							?>
                              
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                         <td><?php echo $row['name'] ?></td>
                                         <td><?php echo $row['id_no'] ?></td>
                                         <td><?php echo $row['phone'] ?></td>
                                         <td><?php echo $row['plate_no'] ?></td>
                                       
                                </tr>
                         
						          <?php } ?>
                            </tbody>
                        </table>
						<input type="submit" class="btn btn-danger" value="Delete" name="delete">
          
		</form>
	</div></div>
	</section>
	</section>
</body>
</html>