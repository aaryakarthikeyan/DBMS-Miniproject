`<?php include('header.php'); ?>
<body style="font-family: Century Gothic" background="bg3.png" >
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center"><strong>BILL GENERATION</strong></h1>
	<div class="row">
			
	<form method="POST" action="purchase.php">
		<div class="col-md-3">
				<center><input type="text" name="customer" class="form-control" placeholder="Enter Customer Name" required></center>
			</div>
<br><br><br>
			<div class="col-md-3">
				<center><input type="number" name="phone" class="form-control" placeholder="Enter Customer Phone number" required></center>
			</div>
			<br><br><br>
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center"></th>
				<strong>
				<th>CATEGORY</th>
				<th>MEDICINE NAME</th>
				<th>PRICE</th>
				<th>QUANTITY</th>
			</strong>
			</thead>
			<tbody>
				<?php 
					$sql="select * from med_items left join category on category.cat_id=med_items.cat_id order by med_items.cat_id asc, med_name asc";
					$query=$conn->query($sql);
					$iterate=0;
					
					while($row=$query->fetch_array()){
						
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['med_id']; ?>||<?php echo $iterate; ?>" name="med_id[]" style=""></td>
							<td><?php echo $row['cat_name']; ?></td>
							<td><?php echo $row['med_name']; ?></td>
							<td class="text-right">&#x20A8; <?php echo number_format($row['med_price'], 2); ?></td>
							<td><input type="number" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		
		<center>	<div class="col-md-2" style="margin-left:1000px;">
				<br><br><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon"></span>SAVE DETAILS</button>
			</div></center>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
</body>
</html>