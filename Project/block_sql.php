<?php 
	
	$con = mysqli_connect('localhost', 'root', '', 'gng');
function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}
	// initialize variables
	if (!empty($_POST['c_id'])) {
		$user_id=$_POST['c_id'];
		$block_reason=$_POST['block_reason'];
		$mail=$_POST['email'];
		echo $block_reason;
		echo $mail;

	mysqli_query($con, "UPDATE customer SET status=0 WHERE c_id=$user_id");
	 	
		$subject="Account Blocking notification";

        $message="Dear customer, 
        Your account has been blocked.
        Because:  {$block_reason}. 
        Thank you.";

        $headers="From: Gadget N Gadget";
        
send_email($mail,$subject,$message,$headers);
		// END of mailing code

		
	header('location: account_block.php');
}
else if (isset($_GET['un_c_id']))
{
		$user_id=$_GET['un_c_id'];

	mysqli_query($con, "UPDATE customer SET status=1 WHERE c_id=$user_id");
	 
	header('location: account_block.php');
	}
	else
	{
	header('location: account_block.php');

	}
?>

