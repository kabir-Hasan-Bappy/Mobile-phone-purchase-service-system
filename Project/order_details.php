<?php include 'aheader.php';?>
<?php include 'connection.php'; ?>
<?php
$order_id=$_GET['id'];
$sql="SELECT * FROM c_order, cart WHERE c_order.o_id='$order_id' AND cart.o_id='$order_id'";
$result=mysqli_query($con, $sql);
while ($row=mysqli_fetch_array($result)) {
  $first_name=$row['fname'];
  $address=$row['address'];
  $mail=$row['email'];
  $city=$row['city'];
  $contact=$row['contact'];
  $method=$row['p_method'];
  $ins_duration=$row['ins_duration'];
  $typeOfcc=$row['typeOfcc'];
  $name_cc=$row['name_cc'];
  $ex_date=$row['ex_date'];
  $cc_number=$row['cc_number'];
  $total_price=$row['total_price'];
  $order_date=$row['order_date'];
  $model=$row['model'];
  $brand=$row['b_name'];
  $quantity=$row['quantity'];
  $price=$row['price'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Details</title>
</head>
<body>
  <br><h1 style="color: darkblue;font-family: algerian;text-align: center;font-size: 30px">Billing Information</h1>
   <a href="order_request.php"> <img src = 'images/back.png' height = 35 width = 45></a>
  
  
  <table style="border:1px solid">

     <tr>
       <th>
        <label>Order Date</label>
      </th>
      <td>
        <label><?php echo $order_date;?></label>
      </td>
    </tr>


    <tr>
      <th>
        <label> Name</label>
      </th>
      <td>
        <label><?php echo $first_name; ?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Address</label>
      </th>
      <td>
        <label><?php echo $address;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>City</label>
      </th>
      <td>
        <label><?php echo $city;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Email</label>
      </th>
      <td>
        <label><?php echo $mail;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Contact</label>
      </th>
      <td>
        <label><?php echo $contact;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Payment Methode</label>
      </th>
      <td>
        <label><?php echo $method;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Installment Duration</label>
      </th>
      <td>
        <label><?php echo $ins_duration;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Credit Card Types</label>
      </th>
      <td>
        <label><?php echo $typeOfcc;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Name on Credit Card</label>
      </th>
      <td>
        <label><?php echo $name_cc;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Credit Card Number</label>
      </th>
      <td>
        <label><?php echo $cc_number;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Expiration Date</label>
      </th>
      <td>
        <label><?php echo $ex_date;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Model</label>
      </th>
      <td>
        <label><?php echo $model;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Brand</label>
      </th>
      <td>
        <label><?php echo $brand;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Quantity</label>
      </th>
      <td>
        <label><?php echo $quantity;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Unit Price</label>
      </th>
      <td>
        <label><?php echo $price;?></label>
      </td>
    </tr>

    <tr>
       <th>
        <label>Total Price</label>
      </th>
      <td>
        <label><?php echo $total_price;?></label>
      </td>
    </tr>

  </table>
  
</body>
</html>