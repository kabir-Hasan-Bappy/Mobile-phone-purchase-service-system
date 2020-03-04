<?php  include('index1.php'); ?>

    
  
<br>
<br>
<br>

<?php

      if(isset($_POST['submit'])){

      if(isset($_GET['go'])){

     

      $name=$_POST['model']; 




      // $db=mysql_connect  ("localhost", "root",  "gng") or die ('I cannot connect to the database  because: ' . mysql_error()); 

      // $mydb=mysql_select_db("gng");

      if ($name=="ALL")

      {$sql=mysqli_query($con,"SELECT * FROM product ")or die( mysqli_error($con)); }

      else

      {
        $sql= mysqli_query($con, "SELECT * FROM product WHERE model LIKE '%" . $name .  "%' OR description LIKE '%" . $name ."%'")or die( mysqli_error($con)); }

      

?>
<form action="Cart.php" method="post">
 <table style='width: 100%'>

 <?php

 while ($row = mysqli_fetch_array($sql)) {
  $description=$row['description'];

?>
<input type = 'hidden' name = "p_id" style="border-style: none;font-size: 17px" value = "<?php echo $row['p_id'];?>">
      </tr>

        <tr>
          <td align = center rowspan= 7><img src ="uploads/<?php echo $row['image'] ?>" id="myimage" name='image' border= '0'  class = 'imgbg' height = 450 width = 390><br>
           <div id="myresult" class="img-zoom-result"></div></td>

  </tr> 
  <tr>
      <td>Product Id <td><input style="border-style: none;font-size: 17px" type = 'text' name = "model"  value = "<?php echo $row['p_id'] ?>"  readonly> </td>
      </tr>

       <tr>
      <td>Model Name <td><input style="border-style: none;font-size: 17px" type = 'text' name = "model"  value = "<?php echo $row['model'] ?>"  readonly> </td>
      </tr>
       <tr>
      <td>Brand Name <td><input style="border-style: none;font-size: 17px" type = 'text' name = "brand"  value = "<?php echo $row['b_name'] ?>"  readonly> </td>
      </tr>
      <tr>
       <td>Price <td><input style="border-style: none;font-size: 17px" type = 'text' name = "model"  value = "<?php echo $row['price'] ?>"  readonly> </td>
      </tr>


      <tr>
        <td> Quantity</td><td><input style="border-style: none;font-size: 17px" type = 'number' min = '1' max = "<?php echo $row['quantity'] ?>"  value = '0' name = "quantity" ></td>
      </tr> 


            
<!--  -->

        </tr>

         </table>

<?php

        }

     




}}


?>
           <div>
              <h2 style="font-size: 20px;color: darkblue;font-weight: bold">Description:</h2><br>
              <p><?php echo $description; ?></p>
          </div>

           <br>


           

          <br><br><br>

           <div style="float:right;margin-right: 150px" >
              <button name="submit" type="submit" <a href="Cart.php"> <img src="images/cart.jpg" alt="" /></a></button>
            </div>

</form>
<br>
<br>
<br>
<br>
<?php include ('footer.php'); ?>

