
<?php include 'index1.php';?>

	<div class="logheader">
		<h2>Customer Registration</h2>
	</div>

	<div class="log">
	<form  action="register_sql.php" method="post">
 
		
		<div class="input-group">
			<label >Customer Name</label> 
			<input type="text" name="customername"  pattern="[a-zA-Z][a-zA-Z\s]*" maxlength="20" value="" required>
		</div>
		<div class="input-group">
			<label >Address</label> 
			<input type="text"  name="address" value="" required>
		</div>
		<div class="input-group">
			<label >Conatct</label>
			<input type="text" name="contact"  pattern="[0][1][5-9]{1}[0-9]{8}" value="" required>
		</div>
		<div class="input-group">
			<label >Email</label>
			<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="30" value="" required>
		</div> 
		<div class="input-group">
			<label >Password</label>
			<input type="password"  minlength="2" maxlength="10" name="password" required>
		</div>

		<div class="input-group">	
		<button type="submit" name="register"class="btn">Register</button>
		</div>
   
<div>
<input type="checkbox" name="agreed" required>
I accept the <a href="#" onClick="MyWindow=window.open('term.php','MyWindow',width=200,height=200); return false;"><u><i>Terms & Conditions</i><u></a>
</div>
		<p>Already a member? <a href="login.php"><b><u>Sign In</u></b></a></p>
	</form>
	</div>


<?php include 'footer.php';?>