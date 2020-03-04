
<?php include 'aheader.php';?>

	<div class="logheader">
		<h2>Admin Registration</h2>
	</div>

	<div class="log">
	<form  action="admin_register_sql.php" method="post">
 
		
		<div class="input-group">
			<label >Admin Name</label> 
			<input type="text" pattern="[a-zA-Z][a-zA-Z\s]*" name="customername" value="" required>
		</div>
		<div class="input-group">
			<label >Address</label> 
			<input type="text"  name="address" value="" required>
		</div>
		<div class="input-group">
			<label >Conatct</label>
			<input type="text" name="contact" pattern="[0][1][5-9]{1}[0-9]{8}"value="" required>
		</div>
		<div class="input-group">
			<label >Email</label>
			<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="" required>
		</div> 
		<div class="input-group">
			<label >Password</label>
			<input type="password" placeholder="Please enter your Password"name="password" maxlength="10" required>
		</div>

		<div class="input-group">	
		<button type="submit" name="register"class="btn">Creat</button>
		</div>
   
	</form>
	</div>


