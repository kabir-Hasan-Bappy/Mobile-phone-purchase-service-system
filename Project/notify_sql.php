<?php 
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'gng');

	// initialize variables
	$fn = "";
	$ln = "";
	$e = "";
	$add="";
	$city = "";
	$con = "";
	$pm= "";
	$insdu= "";
	$ct= "";
	$nc= "";
	$ccno= "";
	$m = "";
	$y= "";
	$p_id = "";
	$model = "";
	$price = "";
	$quantity = "";
	$price = "";
	$id = 0;


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
$p_id = $item['Proid'];
$model = $item['model'];
$price = $item['model'];


$tp2 = 0;


if($pm == 'emi')
{
$r = mysqli_query($con,"INSERT INTO c_order(fname, lname, email, address, city, contact,  p_method,ins_duration, typeOfcc, name_cc, cc_number, email_id, ex_date,  order_ammount) VALUES ('".$fn."', '".$ln."', '".$e."', '".$add."', '".$city."', '".$con."', '".$pm."', '".$insdu."', '".$ct."', '".$nc."', '".$ccno."','".$em."', '".$exd."', '".$odt."')") or die("Failed to Insert Data");
}
else
{

$r = mysqli_query($con,"INSERT INTO c_order(fname, lname, email, address, city, contact,  p_method,email_id, order_ammount,temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$city."', '".$cn."', '".$pm."', '".$em."','".$odt."')") or die("Failed to Insert Data");

}
	}
	?>
