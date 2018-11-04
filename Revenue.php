<?php
	session_start();
    header("X-XSS-Protection: 1; mode=block");
    require('config.php');
    include('header.php');
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Products</title>
  </head>
  <body>
  	<?php
  	$query = "SELECT * FROM `orders` where order_status like '%shipped'";
  	$result = mysqli_query($conn,$query);
  	?>
  	<div class="container" align="center">
  		
	  	<table class="Product-table" id="Prod">
	  		<tr class="header">
	  			<th>Total Orders Recieved</th>
	  			<th>Orders Delievered</th>
	  			<th>Orders Remaining</th>
	  			<th>Orders Through Cash</th>
	  			<th>Orders Through Online</th>
	  			
	  		</tr>
	  		<tbody id="Prod1">
	  			<!-- <input type="text" id="myInput" name="search" class="form-control" placeholder="Search for products" onkeyup="myFunction()"> -->
    	  		<?php while ($row = mysqli_fetch_assoc($result)) {
    	  		?>
    	  		<tr>
    			  	  <td><?php echo $row['order_status ']; ?></td>
    			  	<!-- 	<td><?php echo $row['prod_name']; ?></td>
    			  		<td><?php echo $row['prod_price']; ?></td>
    			  		<td><?php echo $row['prod_rating']; ?></td>
    			  		<td><?php echo $row['prod_avl']; ?></td> --> -->
    			  		
    	  		</tr>
    	  		<?php 
    	  		}
    	  		?>
	  	    </tbody>
	  	</table>
	</div>
	<script>
          $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#Prod1 tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });	
	</script>
</body>
</html>