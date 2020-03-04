<?php 
session_start();

include 'connection.php';
$isloged=false;
if (isset($_SESSION["admin_logged"]) && !empty($_SESSION["admin_logged"])) {
$isloged=$_SESSION["admin_logged"];

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

<link rel="stylesheet" href="css/astyle.css">
<link rel="stylesheet" href="css/drop.css">
<link rel="stylesheet" href="css/brand.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/stock.css">
 




</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p>  <span class="number" style="font-size: 20px; font-weight: bold;color: darkblue">Admin Panel</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="admin_add.php">New</a></li>
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
				<a href="admin.php"><b style="color: #8A0808;font-size: 40px;font-family: Arial Black;text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gadget N Gadget</b></a>
			</div>
			  
			 
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="admin.php">Home</a></li>
			    	<li><a href="brand.php">Brand</a></li>	
			    	<li><a href="product.php">Product</a></li>
			    	<li><a href="order_request.php">Customer Order</a></li>
			    	<li><a href="account_block.php">Customer Account</a></li>
			    	<li><a href="return_product.php">Return Products</a></li>
			    	<li>
			    		<div class="dropdown">
						  <a class="dropbtn">Report</a>
						  <div class="dropdown-content">
						    <a href="stock_report.php">Stock</a>
						    <a href="sell_report.php">Sell</a>
						    
						 </div>
						</div>
			    	</li>	
			    	
     			</ul>
	     	</div>
	     	
	     	<div class="clear"></div>
	     </div>	     
	
