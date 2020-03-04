<?php include ('index3.php'); ?>

<!-- <?php session_start(); ?> -->
   <?php

if(!isset($_SESSION['email']))
{

echo "<h2>Please Login first...........</h2>";

}
else
{

$e = $_SESSION['email'];

include 'connection.php';

$result = mysqli_query($con, "SELECT * from customer where email= '$e' ");

$row = mysqli_fetch_row($result);

?>
<br>
<br>
<br>

<div >


<h1 align = center class = "f" style="font-weight: bold; font-size: 20px">My Profile </h1>

<center>
<form  action="updateProfile.php" method="post" style = " width: 400px;border: 1px solid; border-radius: 5px;">
   <input type="hidden" name="id" value="">
 
    
    <div class="input-group">
      <label >Customer Name</label> 
      <input type="text" pattern="[a-zA-Z][a-zA-Z\s]*" name="customername" value = "<?php echo $row[1] ?>" required>
    </div>
    <div class="input-group">
      <label >Address</label> 
      <input type="text" placeholder="Please enter your address" name="address" value = "<?php echo $row[2] ?>" required>
    </div>
    <div class="input-group">
      <label >Conatct</label>
      <input type="text" pattern="[0][1][5-9]{1}[0-9]{8}" name="contact" pattern='^\+?\d{11}'value = "<?php echo $row[3] ?>" required>
    </div>
    <div class="input-group">
      <label >Email</label>
      <input type="text" placeholder="Please enter your Email"name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value = "<?php echo $row[4] ?>"required>
    </div> 
    
<br>
    <div class="input-group"> 
    <button type="submit" name="update"class="btn">Save Changes</button>
    </div>
</div>
<?php
}


?>
</form>
</center>


<?php include 'footer.php';?>