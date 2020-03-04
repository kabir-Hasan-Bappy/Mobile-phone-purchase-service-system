
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

$fn = $_POST['sfname'];

$ln = $_POST['slname'];

$e =  $_POST['semail'];

$add = $_POST['Address'];

$city = $_POST['select'];

$con = $_POST['contact'];


$pm = $_POST['payment'];

$insdu= $_POST['insdu']; 

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
		
	
}




	
if($pm == 'emi')
{
$r = mysqli_query($con,"INSERT INTO c_order(fname, lname, email, address, city, contact,  p_method,ins_duration, typeOfcc, name_cc, cc_number, email_id, ex_date,  order_ammount,temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$city."', '".$cn."', '".$pm."', '".$insdu."', '".$ct."', '".$nc."', '".$ccno."','".$em."', '".$exd."', '".$odt."')") or die("Failed to Insert Data");
}
else
{

$r = mysqli_query($con,"INSERT INTO c_order(fname, lname, email, address, city, contact,  p_method,email_id, order_ammount,temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$city."', '".$cn."', '".$pm."', '".$em."','".$odt."')") or die("Failed to Insert Data");

}

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		

	$que = "INSERT INTO cart(p_id, model, brand,image , price, quantity, Total_price, email,temp)VALUES('".$item['Proid']."', '".$item['model']."', '".$item['brand']."', 'uploads/".$item['image']."', '".$item['price']."', '".$item['quan']."', '".$tp."', '".$em."', '".$odt."')";
	
	mysqli_query($con,$que ) or die("Failed ");
	
}


$r2 = mysqli_query("SELECT o_id from c_order WHERE temp = '$odt'");



	while($row = mysqli_fetch_row($r2))
	{
		$oid = $row[0];		
	}
	
mysqli_query("update cart set o_id = '$oid' where temp = '$odt'");

mysqli_query("update cart set temp = '' where o_id = '$oid'");

mysqli_query("update c_order set temp = '' where o_id = '$oid'");

if($r2)
{
	echo "<hr>";
	
	echo "<h1 align = center class = 'f'> Thank you for Shopping </h1> <br><br> <h4> Your Order id is : ".$oid. "</h4>";
	
	unset($_SESSION["cart"]);
	
}

else
{
	echo "<h2>Somthig is Wrong... with this Order.... Try again...</h2>";
	
}

mysqli_close($con);

}


?>

