<?php include 'index1.php';?>


<div class="logheader" >
		<h2> Log In</h2>
	</div>
	<div class="log">
	<form  action="login_sql.php" method="post">
		
		<div class="input-group">
			<label >Email</label>
			<input type="text" name="email" id = "eid" onblur = "validateEmail2()" required>
		</div>
		<div class="input-group">
			<label >Password</label>
			<input type="password" name="password" id = "p" maxlength = "8" required>
		</div>
		<div class="input-group">
			
			<button type="submit" name="register"class="btn">LogIn</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn">Cancel</button>

		</div>
		

		<label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px;text-align: none"/> Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="forgotpass.php"><u style="color: black">Forget Password</u></a>
    </label>

 
		<p>Not yet a member? <a href="register.php">Sign Up</a></p>

	</form>


</div>

<?php include 'footer.php';?>