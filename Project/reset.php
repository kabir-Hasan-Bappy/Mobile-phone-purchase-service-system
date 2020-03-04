
<?php include 'index1.php';?> 
<form action="reset_sql.php" method="post">
        <?php 
        $mail=$_GET['mail'];    
          
         ?>

    
<table>
  <tr>
   
<br>

  <div class="middle1">
 

        <div class="container">
          <br>
          <br>
          <center>  <h2 style="font-family: arial;font-size: 30px;font-weight: bold">Reset Your Password</h2>



<input style="background-color: white;margin-top: 41px;margin-left: -2px;height: 40px;width: 350px;font-size: 17px;box-shadow: 0px 0px 10px;border-radius: 40px;border: 1px solid" type="text" value="<?php echo $mail; ?>" name="mail" readonly>
<br>


    <label for="psw"></label>
    <input style="background-color: white;margin-top: 80px;margin-left: -2px;height: 40px;width: 350px;font-size: 20px;border-radius: 40px;border: 1px solid;box-shadow: 0px 0px 10px"  type="password" placeholder="Enter your new password" name="psw"  maxlength="30" /><br><br></br><br>



    <div>

      <a href="#"><button  style="background-color: #01DF3A;width: 151px;height: 40px;box-shadow: 0px 0px 10px; border: 1px solid; font-family: cursive;margin-top: 9px;font-size: 24px;margin-left: 6px" type="submit" name="button1"class="submitbtn"><b>Submit</b></button>
  

      </div>

  </div>



<br>
<br>
 
</tr>
  </table>
</form>

<?php include ('footer.php'); ?>