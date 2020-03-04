<?php include 'aheader.php';?>
<?php  include('brand_sql.php'); ?>


<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM brand WHERE brand_id=$id");

    
      $n = mysqli_fetch_array($record);

      $name = $n['b_name'];
      
      
     
    
  }
?>




<?php if (isset($_SESSION['message'])): ?>
  <div class="msg">
    <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>  

<div class="brnd">
<form method="post" action="brand_sql.php" >
  <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="input-group">
      <label>Brand Name</label>
<input type="text" name="b_name" required value="<?php echo $name; ?>">
</div>

    
   <div class="input-group">
      <?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
    </div>
  </form>
</div>
 


<table>
  <thead>
    <tr style="text-align: center">
    <th>Id</th>
      <th>Brand Name</th>
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr style="text-align: center">
      <td><?php echo $row['brand_id']; ?></td>
      <td><?php echo $row['b_name']; ?></td>
      <td>
        <a href="brand.php?edit=<?php echo $row['brand_id']; ?>"  ><img src = 'images/edit.png' height = 20 width = 20></a>
      </td>
      <td>
        <a href="brand_sql.php?del=<?php echo $row['brand_id']; ?>"  onclick="return confirm('Are you sure want to delete?');"><img src = 'images/delete.png' height = 20 width = 20></a>
      </td>
    </tr>
  <?php } ?>
</table>

 


