<?php
	session_start();
    header("X-XSS-Protection: 1; mode=block");
    require('config.php');
    include('header.php');
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Orders</title>
  </head>
  <body>
  	<?php
  	$query = "SELECT * FROM `orders` ORDER by order_id";
  	$result = mysqli_query($conn,$query);
    $query1 = "SELECT distinct recv_add FROM `orders` ";
    $result1 = mysqli_query($conn,$query1);
    $query2 = "SELECT distinct mop FROM `orders` ";
    $result2 = mysqli_query($conn,$query2);
  	?>
  	<div class="container" align="center">
		<form method="POST" action="sort.php">
		  <select name="sor" id="mySelect" class="btn btn-default">
            <optgroup label="Address" id="add">
                <?php while($row1 = mysqli_fetch_assoc($result1)) {
                    ?>		  	
    		  		<option><?php echo $row1['recv_add']; ?> </option>		  	
                <?php } ?>
            </optgroup>
		  	<optgroup label="Mode Of Payment" id="mp">
		  		 <?php while($row2 = mysqli_fetch_assoc($result2)) {
                    ?>          
                    <option><?php echo $row2['mop']; ?> </option>          
                <?php } ?>
		  	</optgroup>
		  </select>
		  <button type="submit" name="submit" class="btn btn-success">Sort By</button>
		</form>
	  	<table class="table table-bordered table-striped" id="Prod">
	  		<thead>
    	  		<tr class="header">
    	  			<th>Reciever Name</th>
    	  			<th>Order ID</th>
    	  			<th>Reciever Address</th>
    	  			<th>Product ID</th>
    	  			<th>Order Date</th>
    	  			<th>Payment Method</th>	  			
    	  		</tr>
	  		</thead>
	  		<tbody id="Prod1">
	  			<input class="form-control" id="myInput" type="text" placeholder="Sort By">
    	  		<?php while ($row = mysqli_fetch_assoc($result)) {
    	  		?>
    	  		<tr>
    	  				<td><?php echo $row['recv_name']; ?></td>
    		  			<td><?php echo $row['order_id']; ?></td>
    		  			<td><?php echo $row['recv_add']; ?></td>
    		  			<td><?php echo $row['prod_id']; ?></td>
    		  			<td><?php echo $row['order_date']; ?></td>
    		  			<td><?php echo $row['mop']; ?></td>
    		  			
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
