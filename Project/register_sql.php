<?php include 'connection.php';?>
<?php  
//variables to hold our submitted data with post
	$customername = $_POST['customername'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	
	//login password
	$password =md5( $_POST['password']);
	//loging condition      
					if(isset($_POST['register']))
					{
						
						//our sql statement that we will execute
						

						$sql= "INSERT INTO customer(name, address, contact, email, password, create_date) 
								VALUES('$customername', '$address', '$contact', '$email', '$password',NOW())";

							if(mysqli_query($con, $sql)) 
							{ 
								echo "<script>alert('You are Successfully Registered!!!'); window.location='index2.php'</script>";
							}

							else {
								echo "Sorry!! You are not registered";
							}
					}

					?>
