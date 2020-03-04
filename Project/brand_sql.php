<?php 
	
	$con = mysqli_connect('localhost', 'root', '', 'gng');

	// initialize variables
	$name = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['b_name'];
		

		mysqli_query($con, "INSERT INTO brand (b_name) VALUES ('$name')"); 
		$_SESSION['message'] = "Data saved"; 
		header('location: brand.php');
	}
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['b_name'];
	

	mysqli_query($con, "UPDATE brand SET b_name='$name' WHERE brand_id=$id");
	$_SESSION['message'] = "Data updated!"; 
	header('location: brand.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM brand WHERE brand_id=$id");
	$_SESSION['message'] = "Data deleted!"; 
	header('location: brand.php');
}

$results = mysqli_query($con, "SELECT * FROM brand");
?>