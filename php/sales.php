<?php include('header.php'); ?>
<body style="font-family: Century Gothic" background="bgljpg.jpg">
	<style>
		
.btn{
	border: 0;
	background: #34495e;
	color:#fff;
	padding: 12px 50px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;

}
.btn:hover{
	background: #2980b9;
}




	</style>
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">BILL DETAILS</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>BILL DATE</th>
			<th>CUSTOMER NAME</th>
			<th>CUSTOMER PHONE NUMBER</th>
			<th>TOTAL BILL AMOUNT</th>
			<th>VIEW DETAILS</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from bill order by b_id desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td class="text-right">&#8369; <?php echo number_format($row['b_total'], 2); ?></td>
						<td><a href="#details<?php echo $row['b_id']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon"></span> PRINT_BILL</a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
	<div><a href="operation.php"><button class="btn"><span class="glyphicon glyphicon"></span>GO BACK</button></a></div>
</div>
</body>
</html>