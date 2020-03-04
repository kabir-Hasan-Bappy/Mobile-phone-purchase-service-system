

<?php include ('index1.php'); ?>	
 <div class="main">
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form action="send.php" method="POST">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input type="text" name="name" class="textbox" pattern="[a-zA-Z][a-zA-Z\s]*"  maxlength="30" required></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input type="text" name="mail" class="textbox" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="30" required></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><input type="text" name="sub" class="textbox" pattern="^[a-zA-Z'. -]+$"  maxlength="30"  required></span>
						    </div>
						    <div>
						    	<span><label>Message</label></span>
						    	<span><textarea name="msg" required> </textarea></span>
						    </div>
						   <div>
						   		<span><input  style="font-size: 18px ;font-family:arial;font-weight: bold " type="submit" name="submit" value="Send"  class="myButton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
      			<div class="company_address">
				     	<h3><b>Company Information :</h3></b>
						    	<p>House#54, Road#11, Sector#10</p> 
						   		<p>Uttara, Dhaka-1230</p>
						   		<p>Bangladesh</p>
				   		<p>Phone:+8801687713808</p>
				 	 	<p>Email: <span><a href="mailto:@example.com">info@gng.com</a></span></p>
				   </div>
				 </div>
			  </div>		
         </div> 
    </div>
 </div>

<!--footer-->
  <?php include ('footer.php'); ?>