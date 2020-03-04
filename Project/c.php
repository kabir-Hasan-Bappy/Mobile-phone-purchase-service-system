<?php include ('index1.php'); ?>
<br>

<?php
  
session_start();

include 'connection.php';


$odt = date("dmyH:i:s A");


if(isset($_SESSION['email']))
{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

$em = $_SESSION['email'];

}

if(isset($_POST['submit']))
{

$fn = $_POST['name'];


$email =  $_POST['semail'];

$address = $_POST['Address'];

$city = $_POST['city'];
$contact = $_POST['contact'];

$pm = $_POST['payment'];
$insd = $_POST['insdu'];

$ct = $_POST['Ctypes']; 

$nc = $_POST['Nc'];

$ccno = $_POST['CCno'];

$m = $_POST['mon'];

$y = $_POST['yer'];

$exd = $m."/".$y;


$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;
	
}

	
if($pm == 'emi')
{
$r = mysqli_query($con,"INSERT INTO c_order(fname, email, address, city, contact, p_method,ins_duration, typeOfcc, name_cc, cc_number, ex_date, order_amount,order_date,Email_id, temp) VALUES('$fn','$email', '$address','$city', '$contact', '$pm', '$insd', '$ct','$nc','$ccno', '$exd','$tp2',NOW(),'$em', '$odt')") or die("Failed to Insert ");
}
else
{

$r= mysqli_query($con, "INSERT INTO c_order(fname, email, address, city, contact, p_method, order_amount,order_date,Email_id,temp) VALUES('$fn','$email', '$address','$city', '$contact', '$pm','$tp2',NOW(),'$em', '$odt')") or die("Failed to Insert ");

}


foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;

	$que = "INSERT INTO cart(p_id, model, b_name, price, quantity, total_price, email, temp,order_date) values('".$item['Proid']."', '".$item['model']."', '".$item['brand']."', '".$item['price']."', '".$item['quan']."', '".$tp."', '".$em."', '".$odt."',NOW())";
	
	mysqli_query($con, $que) or die("Failed ");
	
}


$r2 = mysqli_query($con,"SELECT o_id from c_order WHERE temp = '$odt'");



	while($row = mysqli_fetch_row($r2))
	{
		$oid = $row[0];		
	}
	
mysqli_query($con,"update cart set o_id = '$oid' where temp = '$odt'");

mysqli_query($con,"update cart set temp = '' where o_id = '$oid'");

mysqli_query($con,"update c_order set temp = '' where o_id = '$oid'");

if($r2)
{
	
	
	echo "<h1 align = center style='color:darkblue;font-style: italic;'><b style='font-size:40px'> Thank you for Purchasing!!</b> </h1>  <hr> <h2 align = center> Your order Request has successfully sent. </h2> <br> <h3 align = center>You will get email soon. Please check your <b color='blue'>Email</b> after sometime</h3> <br> <h4 align = center style='font-size:20px;color:#400F04'> Your Order id is : <b> ".$oid. " </b></h4>";
	
	unset($_SESSION["cart"]);
	
}

else
{
	echo "<h2>Order Failed</h2>";
	
}

mysqli_close($con);

}


?>

<br>
<br>
<?php include ('footer.php'); ?>