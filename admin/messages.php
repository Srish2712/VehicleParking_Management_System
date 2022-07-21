<!DOCTYPE html>
<head>
<title>Messages</title>
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
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<div>
	<p class="phead">Client Messages</p>
	<div style="width:660px;background:white;padding:10px;margin:auto;">
		
						<form method="post" action="deletemsg.php" >
                        <table cellpadding="2800 px" cellspacing="2800 px" border="100 px" class="table table-striped table-bordered" id="example">
                           
                            <thead>
						
                                <tr>
                                    <th>CHK</th>
                                    <th>Name</th>
									<th>Phone</th>
									<th style="width:180px;">Message</th>
                                    <th>Date & Time</th>
                                                                                             
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							$query=mysqli_query($connect,"select * from messages")or die(mysql_error());
							while($row=mysqli_fetch_array($query)){
							$id=$row['id'];
							?>
                              
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                         <td><?php echo $row['name'] ?></td>
										  <td><?php echo $row['phone'] ?></td>
                                         <td style="width:180px text-align:left;"><?php echo $row['msg'] ?></td>
                                         <td><?php echo $row['msgdate'] ?></td>
                                        
                                       
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