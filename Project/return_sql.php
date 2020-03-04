<?php 
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'gng');


	if (isset($_POST['return_btn'])) {
		$return_oid = $_POST['o_id'];
		$return_quantity = $_POST['qty'];

	$sql="SELECT p_id FROM cart WHERE o_id=$return_oid";
	$result=mysqli_query($con, $sql);
	while ($row=mysqli_fetch_array($result)) {

		$product_id[]=$row['p_id'];
	}

	foreach ($product_id as $pid) {
		$sql1="SELECT quantity FROM product WHERE p_id=$pid";
		$result1=mysqli_query($con, $sql1);
		$row1=mysqli_fetch_array($result1);
		$current_quantity=$row1['quantity'];
		$new_qty=$current_quantity+$return_quantity;
		mysqli_query($con, "UPDATE product SET quantity='$new_qty' WHERE p_id=$pid");
	}



	mysqli_query($con, "DELETE FROM c_order WHERE o_id='$return_oid'");
	mysqli_query($con, "DELETE FROM cart WHERE o_id='$return_oid'");
		header('location: return_product.php');
	}

?>