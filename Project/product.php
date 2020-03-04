<?php include 'aheader.php';?>

<?php  include('product_sql.php'); ?>


<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM product WHERE p_id=$id");

      $n = mysqli_fetch_array($record);
      $model = $n['model'];
      $brand_id = $n['b_name'];
      $description = $n['description'];
      $price = $n['price'];
      $quantity = $n['quantity'];
      $image = $n['image'];
     
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

<div class="pro">
 <form method="post" action="product_sql.php" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="input-grp">
      <label>Model</label>
      <input type="text" name="model" required value="<?php echo $model; ?>">
    </div>

    <div class="input-grp">
      <label>Brand Name</label>
      <input type="dropdown" name="b_name" list="b_name" class="">
        <datalist id="b_name">
          <?php include'connection.php'; ?>
          <?php 
            $sql=mysqli_query($con, "SELECT * FROM brand");
            while ($row=mysqli_fetch_array($sql)) {
              ?>
              <option value="<?php echo $row['b_name'] ?>"></option>
              <?php
            }
          ?>
          
        </datalist>
    </div>  

    <div class="input-grp">
       <label>Description</label>
      <input textarea 
        cols="40" rows="4" name="description" required value="<?php echo $description; ?>">
    </div>
    <div class="input-grp">
      <label>Price</label>
      <input type="text" name="price" pattern="^[0-9]" min="0" required value="<?php echo $price; ?>">
    </div>

    <div class="input-grp">
      <label>Quantity</label>
      <input type="text" name="quantity" pattern="^[0-9]" min="0" required value="<?php echo $quantity; ?>">
    </div>

    <div class="input-grp">
      <label>Image</label>
      <input type="file" name="image">
    </div>
    
    <div class="input-grp">
      <?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" style="background: powderblue;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
    </div>
  </form>
  </div>


<?php
$status="Active"; 
 $results = mysqli_query($con, "SELECT * FROM product WHERE product.status='$status'"); ?>

<table style="border:1px solid;">
  <thead>
    <tr style="text-align: center">
   
      <th>Model</th>
      <th>Brand Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Image</th>
      
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr style="text-align: center">
      
      <td><?php echo $row['model']; ?></td>
      <td><?php echo $row['b_name']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><img src="uploads/<?php echo $row['image']; ?>" alt=""></td>
      
      <td>
        <a href="product.php?edit=<?php echo $row['p_id']; ?>" class="edit_btn" >Edit</a>
      </td>
      <td>
        <a href="product_sql.php?del=<?php echo $row['p_id']; ?>" class="del_btn" onclick="return confirm('Are you sure want to delete?');">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>




