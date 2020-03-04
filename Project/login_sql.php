
<?php include 'connection.php';?>
<?php

session_start();

$eid = $_POST['email'];

$pass = $_POST['password'];

if(isset($_POST['register']))
{

$status="1";
$query = "SELECT * FROM customer where email = '$eid' and password = '$pass' AND status='$status'";


$query2 = "SELECT * FROM admin where email = '$eid' and password = '$pass'";

$result = mysqli_query($con,$query) or die("Error in query");

$result3 = mysqli_query($con,$query2) or die("Error in query");

$row = mysqli_num_rows($result);

$row2 = mysqli_num_rows($result3);

$result2 = mysqli_query("SELECT name from customer where email = '$eid'");

$r = mysqli_fetch_row($result2);

if($row == 1)
{

$_SESSION['email'] = $eid;

$_SESSION['name'] = $r[0];
$_SESSION['user_logged'] = True;


header("location:index2.php");

}

elseif($row2 == 1)
{

$_SESSION['name'] = $eid;
$_SESSION['admin_logged'] = True;

header("location:admin.php?");
}

else
{
echo "<script>alert('Invalid Email or Password!!!Please Try Again Later...'); 
window.location='index.php'</script>";
}

}

mysqli_close($con);
?>