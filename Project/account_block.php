<?php include 'aheader.php';?>
<?php include 'connection.php';?>




<div style="float: left;width: 75%">

<table class="acc">
  <thead>
    <tr style="text-align: center;background-color: wheat;font-size: 18px">
    <th>SL</th>
    <th>User Id</th>
      <th> User Name</th>
      <th>Address</th>
       <th>Contact</th>
      <th>Email</th>
      <th>Create Date</th>
    
      
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM customer";
    $result=mysqli_query($con, $sql);
    $sl=1;
    while ($row=mysqli_fetch_array($result)) {
      $email=$row['email'];
    ?>
    <tr style="text-align: center;font-size: 17px">
      <td><?php echo $sl++; ?></td>
      <td><?php echo $row['c_id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['contact']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['create_date']; ?></td>
      <td>
        <?php
        if ($row['status']==1) { ?>
        <a href="account_block.php?c_id=<?php echo $row['c_id']; ?>" style="background-color: darkgreen; height: 50px;width: 77px;color: white" class="edit_btn">Block</a>
       <?php }
       else
       { ?>
        <a href="block_sql.php?un_c_id=<?php echo $row['c_id']; ?>" style="background-color: red; height: 50px;width: 77px;color: white" class="edit_btn">Unblock</a>
      <?php }
        ?>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
  
   
  
      
</table>
</div>
<?php
if (isset($_GET['c_id']))
 {

  $c_id=$_GET['c_id'];
$sql=mysqli_query($con, "SELECT email FROM customer WHERE c_id='$c_id'");
$row=mysqli_fetch_array($sql);
$cus_email=$row['email'];
  ?>
  <br>
  <br>
<div style="float: right;width: 18%;">
  <form action="block_sql.php" method="post">
    <input type="hidden" name="email" value="<?php echo $cus_email; ?>">
    <input type="hidden" name="c_id" value="<?php echo $_GET['c_id']; ?>">
    <textarea name="block_reason" id="" cols="30" rows="10" required></textarea>
    <button>Block this Person</button>
</div>

<?php
}
?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</div>

</div>

 

