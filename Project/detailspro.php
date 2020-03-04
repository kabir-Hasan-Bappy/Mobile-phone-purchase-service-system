
<?php include ('connection.php'); ?>
<!DOCTYPE HTML>
<head>
<title>Gadget N Gadget</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css">






</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p> call us <span class="number">+8801687713808&nbsp;(10am- 6pm)</span></span></p>
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
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     
	






<?php 
$id=$_POST['id'];
$model=$_POST['model'];
$brand=$_POST['brand'];
$description=$_POST['description'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$image=$_POST['image'];
 


?>
<div class="details" style="margin-top:100px;">

<form action="Cart.php" method="post">

<table width='100%' height= '300' border= 0 cellpadding= 8 cellspacing = 5 align = center style = 'padding:5px; background-color:#FBFCFC; font-family:Futura Lt BT; font-weight:bold; font-size:18px;'> 
	


		<td align = center rowspan= 7><img src ="uploads/<?php echo $image; ?>" name='image' border= '0'  class = 'imgbg' height = 450 width = 390><br></td>
	


	</tr> 


	
	<tr>
			<td>Product ID <td><input type = 'text' name = "p_id" style="border-style: none;font-size: 17px" value = "<?php echo $id;?>"  readonly> </td>
			</tr>

		<tr>
			<td>Model Name <td><input style="border-style: none;font-size: 17px" type = 'text' name = "model"  value = "<?php echo $model; ?>"  readonly> </td>
			</tr> <tr>
				<td>Brand <td> <input style="border-style: none;font-size: 17px" type = 'text'  name = "brand"  value = "<?php echo $brand; ?>" readonly> </td>
				</tr> 
				 <tr>
						<td>Price<td><font style = 'font-family:Rupee Foradian'></font> <input style="border-style: none;font-size: 17px" type = 'text'  name = "price" value = "<?php echo $price; ?>"  readonly> </td>

						</tr> <tr>
						<td> Quantity</td><td><input style="border-style: none;font-size: 17px" type = 'number' min = '1' max = "<?php echo $quantity; ?>"  value = '0' name = "quantity" ></td>
						</tr> 

						
					 </table>
					 <br>


					 <div>
							<h2 style="font-size: 20px;color: darkblue;font-weight: bold">Description:</h2><br>
							 <?php echo $description;?>
					</div>

					<br><br><br>

					 <div style="float:right;margin-right: 150px" >
							<button name="submit" type="submit" <a href="Cart.php"> <img src="images/cart.jpg" alt="" /></a></button>
						</div>

<br>
<br>
<br>
<br>
<br>
<br>
<?php include ('footer.php'); ?>