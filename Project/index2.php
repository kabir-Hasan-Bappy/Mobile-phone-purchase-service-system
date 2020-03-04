
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
				 <p> call us <span class="number">+8801687713808&nbsp;(10am- 6pm)</span></span></p>
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
			 	<img src="images/img1.jpg" alt="learn more" />
		</div>
	</div>

 <br>
 <br>
 <br>
 <br>
 <br>

<!--middle -->
 <div class="middle" >
 
 	
 	
    <div class="row" style="height: 420px;width: 100%;background-color: #F7F9F9  ;margin-top: 500;overflow: hidden;">

    	<br>
    	<p style="text-align: center;font-weight: bold;font-size: 30px">New Arrivals</p>
    	<br>
    <br>
   

    	 <?php
        $sql = mysqli_query($con, "SELECT * FROM product ORDER BY p_id DESC LIMIT 3");
        while ($row=mysqli_fetch_array($sql)) {
        ?>


    	<div class="col" style="height: 320px;width: 22%; float: left;background-color: #FEF5E7;margin-left: 9%;border:1px solid">
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

   <?php include ('footer.php'); ?>