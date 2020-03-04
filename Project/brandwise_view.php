
<?php include ('connection.php'); ?>
<?php  ?>


<!DOCTYPE HTML>
<head>
<title>Gadget N Gadget</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/middle.css">



</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p> call us <span class="number">+8801687713808</span></span></p>
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
	     			<input type="text"  name="model">
	     			<input type="submit" value="" name="submit">
	     		</form>
<!-- 	     		<?php echo $s; ?> 
 -->	     	</div>
	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="brand">

				   <ul>
				  	<h3>Brands</h3>
				  	<?php
				  	$sql=mysqli_query($con, "SELECT * FROM brand");

				  	while ($row=mysqli_fetch_array($sql)) { ?>
				      <li><a href="brandwise_view.php?b_name=<?php echo $row['b_name']; ?>"><?php echo $row['b_name']; ?></a></li>
				  	<?php
				  	}
				  	?>
				      
				  </ul>
				</div>
			</div>

			 <div class="header_bottom_right">	
			 	<p> <?php echo $row['b_name']; ?></p>
		</div>
		<div class="header_bottom_right">	
			 	<img src="images/img1.jpg" alt="learn more" />
		</div>
	</div>

 <br>
 <br>


<!--middle -->
 <div class="middle" >
 	<br>
 	<br>
 	<br>
 	
    <div class="row" style="width: 100%;background-color: #F7F9F9  ;margin-top: 500;overflow: hidden;">

    	<br>
    	<?php
    	if (isset($_GET['b_name']) || !empty($_GET['b_name'])) { ?>

    	<p style="text-align: center;font-weight: bold;font-size: 30px;font-family: cursive;color: darkblue"><?php echo $_GET['b_name']; ?></p>

    	<?php
    	}
    	else
    	{
    		echo '<p style="text-align: center;font-weight: bold;font-size: 30px">New Products</p>';
    	}
    	?>
    	<br>
    
   

    	 <?php
    	 $b_name=$_GET['b_name'];
        $sql = mysqli_query($con, "SELECT * FROM product WHERE b_name='$b_name' ORDER BY p_id DESC");
        while ($row=mysqli_fetch_array($sql)) {
        ?>


    	<div class="col" style="height: 320px;width: 22%; float: left;background-color: #FEF5E7;margin-left: 9%;border:1px solid;margin-top: 15px">
    		<br>
    		

    		<a href=""><img class="p_image" src="uploads/<?php echo $row['image'] ?>" alt="Image"></a>
          <h3 style="text-align: center; font-weight: bold">Model:&nbsp;<?php echo $row['model'] ?></h3>
          <center>
          <label>Tk: &nbsp;<?php echo $row['price'] ?></label> <br>
          <br>
          <form action="detailspro.php" method="post">
          	
          	<input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
          	<input type="hidden" name="model" value="<?php echo $row['model']; ?>">
          	<input type="hidden" name="brand" value="<?php echo $row['b_name']; ?>">
          	<input type="hidden" name="description" value="<?php echo $row['description']; ?>">
          	<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
          	<input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
          	<input type="hidden" name="image" value="<?php echo $row['image'] ?>">
<div style="    background-color: darkgreen;
    height: 35px;
    width: 91px;
    margin-top: -10px">
          <button style="      background-color: white;
    width: 84px;
    margin-top: 5px;
    height: 26px;
    border-radius: 30px" name="view">View</button>

          </div> 
          </form>
          
          </center>
    	</div>
    	<?php
      }
      ?>

    </div>

   
<!--end middle-->




<br>

    <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="about.php">About Us</a></li>
						<li><a href="terms&con.php">Terms and Conditions</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="return.php">Return Policy</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="emi.php">EMI policy</a></li>
						
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="login.php">Sign In</a></li>
							<li><a href="#">View Cart</a></li>
							<li><a href="#">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+8801687713808</span></li>
						</ul>
						<div class="social-icons">
							<h4>Social sites</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p> All rights reserved  by @Bappy</p>
		   </div>
    </div>
  
</body>
</html>
