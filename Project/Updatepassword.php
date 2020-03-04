<?php

session_start();

include "connection.php";

if(isset($_SESSION['email']))
{
	$e = $_SESSION['email'];
}
else
{
	echo "Please Login first...........!!!!";
}


$p = $_POST['npassword'];

$c_p = $_POST['c_password'];


if($p != $c_p)
{
	echo "<h2 style = 'color:red;'> Password Not Match.......</h2>";
}
else
{

$query =("UPDATE customer SET password = '$c_p' WHERE email = '$e'");

$v = mysqli_query( $con, $query );

if($v)
{

 echo "<script>alert('Your password successfully updated!!!'); 
 window.location='index2.php'</script>"; 
}
else
{
echo "<h1>Failed To Update Password.....</h1>";

}

}
mysqli_close($con);
?>