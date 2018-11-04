<?php
	session_start();
    header("X-XSS-Protection: 1; mode=block");
    require('config.php');
    include('header.php');
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Status</title>
  </head>
  <body>
  	<?php
  	$query = "SELECT * FROM `status` ORDER by due_date";
  	$result = mysqli_query($conn,$query);
  	?>
  	<div class="container" align="center">
  		<input type="text" id="Input" name="search" placeholder="Search for products" onkeyup="myFunction()">
	  	<table class="Product-table" id="Prod">
	  		<tr class="header">
	  			<th>Order ID</th>
	  			<th>Due Date</th>
	  			<th>Product ID</th>
	  			<th>Order Date</th>
	  			<th>Agent ID</th>
	  			<th>Order Status</th>
	  		</tr>
	  		<?php while ($row = mysqli_fetch_assoc($result)) {
	  		?>
	  		<tr>
			  		<td><?php echo $row['order_id']; ?></td>
			  		<td><?php echo $row['due_date']; ?></td>
			  		<td><?php echo $row['prod_id']; ?></td>
			  		<td><?php echo $row['order_date']; ?></td>
			  		<td><?php echo $row['agent_id']; ?></td>
			  		<td><?php echo $row['order_status']; ?></td>
			  		
	  		</tr>
	  		<?php 
	  		}
	  		?>
	  	</table>
	</div>
	  	<script>
			
		</script>
 	</body>
  </html>