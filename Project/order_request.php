<?php include 'aheader.php';?>

<?php  include('product_sql.php'); ?>


<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM product WHERE p_id=$id");

    if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $model = $n['model'];
      $brand_id = $n['name'];
      $description = $n['description'];
      $price = $n['price'];
      $quantity = $n['quantity'];
      $image = $n['image'];
     
    }
  }
?>
<div style="float: right;margin-top: 30px;background-color: white;height: 60px;width:150px;font-size: 30px;font-style: arial;font-weight: bold;text-align: center;">
   <a href="fpdf/invoice-form-db.php">INVOICE</a> <br>
</div>

<?php
$status="Active"; 
 $results = mysqli_query($con, "SELECT * FROM c_order, cart WHERE c_order.o_id=cart.o_id ORDER BY c_order.o_id DESC"); ?>
<div style="float: left;width: 80%" >
<table>
  <thead>
    <tr style="text-align: center">
    <th>Order Id</th>
      <th> Name</th>
       <th>Model</th>
      <th>Order Type</th>
      <th>Quantity</th>
      <th>Total Price</th>
      <th>Status</th>
      
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <?php 
        $o_id=$row['o_id'];
         ?>
    <tr style="text-align: center">
      <td><a href="order_details.php?id=<?php echo $o_id; ?>"><?php echo $row['o_id']; ?></a></td>
      <td><?php echo $row['fname']; ?></td>
       <td><?php echo $row['model']; ?></td>
      <td><?php echo $row['p_method']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['total_price']; ?></td>
      <td><?php echo $row['status']; ?></td>
      
  <form action="order_sql.php" method="POST">
      <td>
        <!-- <a href="order_sql.php?o_id_approve=<?php #echo $row['o_id']; ?>" class="edit_btn" >Approve</a> -->
       
        <input type="hidden" name="o_id" value="<?php echo $row['o_id']; ?>">
        <input type="hidden" name="name" value="<?php echo $row['fname']; ?>">
        <?php
        $o_id=$row['o_id'];
         $sql_check="SELECT status FROM c_order WHERE o_id='$o_id'";
         $result_check=mysqli_query($con, $sql_check);
         $logic=false;
         while ($row=mysqli_fetch_array($result_check)) {
          if ($row['status']==1) {
            $logic=true;
          }
          else{
            $logic=false;
          }
         }

         if ($logic==false) { ?>
           <button class="edit_btn" name="approve_btn">Approve</button>
        <?php }
        else{ ?>
           
       <?php }


         ?>
      </td>
      <td>
        <!-- <a href="order_sql.php?o_id_reject=<?php# echo $row['o_id']; ?>" class="del_btn" onclick="return confirm('Are you sure want to delete?');">Reject</a> -->
        <button class="del_btn" name="reject_btn" onclick="return confirm('Are you sure want to delete?');">Reject</button>
      </td>
  </form>
    </tr>
  <?php } ?>
</table>



</div>