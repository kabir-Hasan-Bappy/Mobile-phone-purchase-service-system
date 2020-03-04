
<?php include 'index1.php';?> 
       <br>
<div>
      
<form action="forgotpass_sql.php" method="post">
<table>
  <tr>
   
<br>

  <div class="middle1" >

        <div class="container" style="background-color: #DCDCDC;height: 380px;width: 600px;margin-left: 250px;border-radius: 10px">
          <br>
          
<center>
          <h2 style="font-size: 25px;font-weight: bold;color: darkblue">Recover Your Password</h2></center>
<div>

    <label   for="email"></label>
    <input style="background-color: white;margin-top: 40px;margin-left: 77px;height: 38px;
    width: 398px;font-size: 17px" type="text" placeholder="Enter your Email" required name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="30" /><br><br>
   <br> <center>
    <button style="background-color: #FE9A2E;height: 40px;font-weight: bold;width: 200px;font-size: 16px;font-family: arial;border-radius: 10px" name="verify">Get Verification Code</button>
   
    </center>
    <input type="hidden" name="v_code" value="<?php echo  mt_rand(); ?>">


    <input style="background-color: white;
    margin-top: 35px;
    margin-left: 77px;
    height: 38px;
    width: 398px;
    font-size: 17px" type="text" name="mail_v_code"  placeholder="Verification Code">
</div>
<br>

    <button style="background-color: #01DF3A;margin-left: 200px;height: 40px;font-weight: bold;width: 200px;font-size: 16px;font-family: arial;border-radius: 10px" name="submit">Submit</button>

</form>

        </div>

  </div>




<br>



  
</tr>
  </table>
</div>


<?php include ('footer.php'); ?>