<?php include ('connection.php'); ?>



<!DOCTYPE HTML>
<head>
<title>Gadget N Gadget</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/middle.css">
<script src="js/passvalidation.js"></script>



</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p> call us <span class="number">+8801687713808 &nbsp;(10am- 6pm)</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
					
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><b style="color: #8A0808;font-size: 30px;font-family: Arial Black">Gadget N Gadget</b></a>
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