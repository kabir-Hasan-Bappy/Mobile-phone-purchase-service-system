<?php 
	// session_start();
	$con = mysqli_connect('localhost', 'root', '', 'gng');

	// initialize variables
	$model = "";
	$brand_id = "";
	$description = "";
	$price = "";
	$quantity = "";
	$image = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
		$model = $_POST['model'];
		$brand_id = $_POST['b_name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$image= $_FILES["image"]["name"];
		$status="Active";

		mysqli_query($con, "INSERT INTO product (model, b_name, description, price, quantity, image, status,add_date) VALUES ('$model', '$brand_id', '$description', '$price', '$quantity', '$image', '$status', NOW())"); 
		$_SESSION['message'] = "Data saved"; 
		header('location: product.php');
	}

	//Update 

	if (isset($_POST['update'])) {
		move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
		$id = $_POST['id'];
		$model = $_POST['model'];
		$brand_id = $_POST['b_name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$image= $_FILES["image"]["name"];
	

	mysqli_query($con, "UPDATE product SET model='$model',  b_name='$brand_id',  description='$description',  price='$price',  quantity='$quantity', image='$image' WHERE p_id=$id");
	$_SESSION['message'] = "Data updated!"; 
	header('location: product.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM product WHERE p_id=$id");
	$_SESSION['message'] = "Data deleted!"; 
	header('location: product.php');
}

$results = mysqli_query($con, "SELECT * FROM product");
?>