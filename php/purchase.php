<?php
	include('conn.php');
	if(isset($_POST['med_id'])){
 
		$customer=$_POST['customer'];
		$phone=$_POST['phone'];
		$sql="insert into bill (customer , phone , date_purchase) values ('$customer' , '$phone' , NOW())";
		$conn->query($sql);
		$pid=$conn->insert_id;
 
		$total=0;
 
		foreach($_POST['med_id'] as $product):
		$proinfo=explode("||",$product);
		$productid=$proinfo[0];
		$iterate=$proinfo[1];
		$sql="select * from med_items where med_id='$productid'";
		$query=$conn->query($sql);
		$row=$query->fetch_array();
 
		if(isset($_POST['quantity_'.$iterate])){
			$subt=$row['med_price']*$_POST['quantity_'.$iterate];
			$total+=$subt;

			$sql="insert into billingdetails (b_id,med_id, quantity) values ('$pid', '$productid', '".$_POST['quantity_'.$iterate]."')";
			$conn->query($sql);

			$sql="update medicine_report set med_units=med_units-'".$_POST['quantity_'.$iterate]."' where medicine_report.med_id='$productid'";
						$query=$conn->query($sql);
		}
		endforeach;
 		
 		$sql="update bill set b_total='$total' where b_id='$pid'";
 		$conn->query($sql);
		header('location:sales.php');		
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='order.php';
		</script>
		<?php
	}
?>