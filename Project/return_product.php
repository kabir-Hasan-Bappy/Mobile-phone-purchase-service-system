<?php include 'aheader.php';?>

<?php  include('product_sql.php'); ?>





<?php
$status="Active"; 
 $results = mysqli_query($con, "SELECT * FROM c_order, cart WHERE c_order.o_id=cart.o_id AND c_order.status=1 AND cart.status=1 ORDER BY c_order.o_id DESC"); ?>
<div style="width: 100%" >
<table>
  <thead>
    <tr style="text-align: center">
    <th>Order Id</th>
      <th>First Name</th>
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
      
  <form action="return_sql.php" method="post">
      <td>
        <!-- <a href="order_sql.php?o_id_approve=<?php #echo $row['o_id']; ?>" class="edit_btn" >Approve</a> -->
       
        <input type="hidden" name="o_id" value="<?php echo $row['o_id']; ?>">
        <input type="hidden" name="qty" value="<?php echo $row['quantity']; ?>">
           <button class="edit_btn" name="return_btn">Return</button>

      </td>
    
  </form>
    </tr>
  <?php } ?>
</table>



</div>