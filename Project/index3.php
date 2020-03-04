<?php include ('connection.php'); ?>
<?php 
session_start();


$isloged=false;
if (isset($_SESSION["user_logged"]) && !empty($_SESSION["user_logged"])) {
$isloged=$_SESSION["user_logged"];

}
else
{
	header("Location: http://localhost:8080/new/login.php");
}


?>




<!DOCTYPE HTML>
<head>
<title>Gadget N Gadget</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/middle.css">
<link rel="stylesheet" href="css/brand.css">
<link rel="stylesheet" href="css/drop.css">
<script src="js/passvalidation.js"></script>



</head>
<body>


	<?php
//$p = $_GET['email'];

if(isset($_SESSION['email']))
{
	$p = $_SESSION['email'];
}
?>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p> call us <span class="number">+8801687713808</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					
					<?php
					if ($isloged==false) { ?>
					<li><a href="login.php">Login</a></li>
					<?php }
					else
					{ ?>

					<li><a href="logout.php">Logout</a></li>
					<?php }
					?>
					
				
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index2.php"><b style="color: #8A0808;font-size: 30px;font-family: Arial Black">Gadget N Gadget</b></a>
			</div>
			 
			 
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="about.php">About</a></li>	
			    	<li><a href="contact.php">Contact</a></li>
			    	<li><a href="Cart.php">Cart</a></li>
			    	<li>
			    		<div class="dropdown">
						  <a class="dropbtn">My Account</a>
						  <div class="dropdown-content">
						    <a href="Myprofile.php">Profile</a>
						    <a href="Changepassword.php">Reset Password</a>
						    <a href="myorder.php">My Order</a>
						 </div>
						</div>
			    	</li>
			    	
    
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form  method="post" action="search.php?go"  id="searchform">
	     			<input type="text"  name="model" required>
	     			<input type="submit" value="" name="submit">
	     		</form>
<!-- 	     		<?php echo $s; ?> 
 -->	     	</div>
	     	<div class="clear"></div>
	     </div>	     
