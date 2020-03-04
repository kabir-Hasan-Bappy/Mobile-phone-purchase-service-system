<?php include 'connection.php';?>

<?php
session_start();

if(isset($_SESSION['email']))
{


$e = $_SESSION['email'];

}

// set LastName = '".$ln."' set Gender = '".gen."' set ContactNo = '".$cn."'




if(isset($_POST['update']))
{

$fn = $_POST['customername'];

$ln = $_POST['address'];

$gen = $_POST['contact'];

$cn = $_POST['email'];

mysqli_query($con, "UPDATE customer SET name='$fn',address='$ln', contact='$gen', email='$cn' WHERE email='$e'");

	header('location: Myprofile.php');

}
else
{
echo "<h1 style = 'color:red;'> Failed to Update Data................!</h1>";
}
mysqli_close($con);
?>