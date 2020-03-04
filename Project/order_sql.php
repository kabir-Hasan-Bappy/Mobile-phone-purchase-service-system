<?php include 'connection.php';?>
<?php 
function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}

 ?>
<?php  
//variables to hold our submitted data with post
	$order_id = $_POST['o_id'];
	$name = $_POST['name'];


	$status = 1;
	$result=mysqli_query($con, "SELECT fname, email FROM c_order WHERE o_id='$order_id'");
	while ($row=mysqli_fetch_array($result)) {
		$mail=$row['email'];
	}

	if (isset($_POST['approve_btn']) && isset($mail)) {
		$sql="UPDATE c_order SET status='$status' WHERE o_id='$order_id'";
		$sql2="UPDATE cart SET status='$status' WHERE o_id='$order_id'";

// query for geting ordered quantity
		$sql3=mysqli_query($con, "SELECT quantity, p_id FROM cart WHERE o_id='$order_id'");
		$row_qty=mysqli_fetch_array($sql3);
		$ordered_quantity=$row_qty['quantity'];
		$ordered_pro_id=$row_qty['p_id'];

			// query for geting product quantity
		$sql4=mysqli_query($con, "SELECT quantity FROM product WHERE p_id='$ordered_pro_id'");
		$row_pro_qty=mysqli_fetch_array($sql4);
		$pro_quantity=$row_pro_qty['quantity'];

		$new_qty=$pro_quantity-$ordered_quantity;
		mysqli_query($con, "UPDATE product SET quantity='$new_qty' WHERE p_id='$ordered_pro_id'");

		if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
		 echo "<script>alert('Order has been Approved!!!'); window.location='order_request.php'</script>";
		// code for send confirmation mail
			
		$subject="Order Confirmation";

        $message="Dear {$name},

         Your Order id ({$order_id}) has been Approved.
       
         For any issue,
         Contact Us: 01687713808 (10am-6pm)

         Thank You!";

        $headers="From: Gadget N Gadget";
        

        send_email($mail,$subject,$message,$headers);

		// END of mailing code

		}
		else{
			echo "Not Updated";
		}

	}


	if (isset($_POST['reject_btn']) && isset($mail)) {
		$sql="DELETE FROM c_order WHERE o_id='$order_id'";
		$sql2="DELETE FROM cart WHERE o_id='$order_id'";
		if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
		echo "<script>alert('Order has been Cancled!!!'); window.location='order_request.php'</script>";
		// code for send confirmation mail
		$subject="Order Confirmation";

        $message="Dear {$name},

         Your Order id ({$order_id}) has been Canceled.
       
         For any issue,
         Contact Us: 01687713808 (10am-6pm)

         Thank You!";

        $headers="From: Gadget N Gadget";
        

        send_email($mail,$subject,$message,$headers);

		// END of mailing code

		}
		else{
			echo "Not Reject";
		}

	}
	

?>
