<?php include "index3.php";?>
<?php include "connection.php";?>



<?php

// session_start();

if(!isset($_SESSION['email']))
{

echo "<h2>Please Login first...........</h2>";

}
else
{

?>






  <?php
//$p = $_GET['email'];

if(isset($_SESSION['name']))
{
  $p = $_SESSION['name'];
}
?>
     
 <br>
 <br>
 


<h2 align="center" class = "f" style="font-size: 20px;font-weight: bold" >Change Password</h2>


<form name="Change" action = "Updatepassword.php" method = "post" onSubmit="return check()">
<table align="center" style = "font-family:arial; font-weight:bold; border:1px solid" cellpadding="10" cellspacing="15">
  <tr>

    <td>New Password</td>
    <td><input type="password" id = "np" name="npassword" class = "in6" size="20" placeholder = "New Password" maxlength="8" onblur = "pass()" required/></td>
  </tr>
  <tr>
    <td>Confirm Password</td> 
    <td><input name="c_password" id = "cp" class = "in6" type="password" size="20" placeholder = "Confirm Password" maxlength="8" onblur = "cpassword()" required/> </td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td><input type="submit" name = "submit" value = " Change Password " class = "Addtocart"/>
</tr>
</table>

</form>
</body>
</html>
<?php
}
?>


<?php include "footer.php";?>