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
  	$query = "SELECT * FROM `product` ORDER by prod_id";
  	$result = mysqli_query($conn,$query);
  	?>
  	<div class="container" align="center">
  		
	  	<table class="Product-table" id="Prod">
	  		<tr class="header">
	  			<th>Product ID</th>
	  			<th>Product Name</th>
	  			<th>Product Price</th>
	  			<th>Product Rating</th>
	  			<th>Product Avialable</th>
	  			
	  		</tr>
	  		<tbody id="Prod1">
	  			<input type="text" id="myInput" name="search" class="form-control" placeholder="Search for products" onkeyup="myFunction()">
    	  		<?php while ($row = mysqli_fetch_assoc($result)) {
    	  		?>
    	  		<tr>
    			  		<td><?php echo $row['prod_id']; ?></td>
    			  		<td><?php echo $row['prod_name']; ?></td>
    			  		<td><?php echo $row['prod_price']; ?></td>
    			  		<td><?php echo $row['prod_rating']; ?></td>
    			  		<td><?php echo $row['prod_avl']; ?></td>
    			  		
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