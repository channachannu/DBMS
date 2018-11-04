<?php
session_start();
include('header.php');
require('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
        $sort = mysqli_real_escape_string($conn,$_POST['sor']);       
        $query = "select * from orders where mop='$sort' xor recv_add='$sort'";
        $result = mysqli_query($conn,$query);
        // if($sort == 'Address') {
        // 	$query1 = "create view sort as select * from orders where  recv_add='$sort'";
        // 	$result1 = mysqli_query($conn,$query);
        // } else {
        // 	$query1 = "create view sort as select * from orders where mop='$sort'";
       	// 	 $result1 = mysqli_query($conn,$query);
        // }
        // $row = mysqli_fetch_assoc($result);
        // echo $row['recv_add'];
        $_SESSION['qr'] = $sort;
    }
       
        

    

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sort</title>
</head>
<body>
<div class="container" align="center">
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
	  	<form method="GET" action="excel.php">
	  	<button name="create_excel" id="create_excel" class="btn btn-success">Generate Excel sheet</button>
	  </form>
	  </div>
	  <script type="text/javascript">
	  	// $(document).ready(function() {
	  	// 	$('#create_excel').click(function() {
	  	// 		var excel_data = $('#header').html();
	  	// 		var page = "excel.php?data=" + excel_data;
	  	// 		window.location = page;
	  	// 	});
	  	// });
	  </script>
</body>
</html>