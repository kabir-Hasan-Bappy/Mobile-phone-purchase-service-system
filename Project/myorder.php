<?php include ('index3.php'); ?>
<?php include ('connection.php'); ?>



	<?php
//$p = $_GET['email'];

if(isset($_SESSION['email']))
{
	$p = $_SESSION['email'];
}
?>
  

			 


 <br>
 
<?php

if(!isset($_SESSION['email']))
{

echo "<h2>Please Login first...........</h2>";

}
else
{




echo "<h1 style='color:darkblue; font-size:30px; font-family:calibiri; font-weight:bold; text-align:center'> My Order </h1> <hr>";


echo "<table cellspacing = 2 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#DC7633;color:black;font-weight:bold'>";

echo "<td> <strong>Order Id  <td> <strong> Payment Method <td> <strong> Credit card Types <td><strong> Name on Credit Card <td><strong>Credit Card No<td> <strong> <strong>Billing Address </td><td><strong> Order Ammount  <td><strong> Email id <td><strong> Action </td> <tr align = center>";		

if(isset($_SESSION['email']))
{
	$eid = $_SESSION['email'];
	

$result = mysqli_query($con, "select * from c_order where Email_id = '$eid'") or die("Error");
	
while($row = mysqli_fetch_row($result))
{
	
	echo "<td>".$row[0];
	echo "<td>".$row[6];
	echo "<td>".$row[8];
	echo "<td>".$row[9];
	echo "<td>".$row[10];
	echo "<td>".$row[3];
	echo "<td>".$row[12];
	echo "<td>".$row[15];
	echo "<td> <a href = 'view_order_item.php?id=$row[0]&em=$row[15]'>View </a>";
	echo "<tr align = center>";
}
	
echo "</tr></table>";

}
}
?>
<br>

<?php include ('footer.php'); ?>