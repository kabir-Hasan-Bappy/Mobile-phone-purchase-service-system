<?php include ('connection.php'); ?>
<?php include ('index3.php'); ?>


<br>
<br>

	<?php
//$p = $_GET['email'];

if(isset($_SESSION['email']))
{
	$p = $_SESSION['email'];
}
?>
 
<?php



if(isset($_GET['id']))
{
	
$oid = $_GET['id'];
$emid = $_GET['em'];	

}

$result = mysqli_query($con, "select * from cart where o_id = '$oid' and email = '$emid'") or die("Error in selecting data from database");


echo "<h1 style='color:darkblue; font-size:30px; font-family:calibiri; font-weight:bold; text-align:center'> Order Items <hr></h1>";
echo "<table  width = 1000 cellspacing = 3 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#DC7633;color:black;font-weight:bold;'>";

echo "<td> <strong>Cart Id  <td> <strong>Model<td> <strong> Brand <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Status </td> <tr>"; 

while($rows = mysqli_fetch_row($result))
{
	
	echo "<td align = 'center'> ".$rows[0];
	
	echo "<td align = 'center'> ".$rows[3];
	echo "<td align = 'center'> ".$rows[4];
	echo "<td align = 'center'> ".$rows[5];	
	echo "<td align = 'center'>".$rows[6];
	echo "<td align = 'center'>".$rows[10];
	echo "<tr>";
}

echo "</tr></table>";
?>

<br>

<?php include ('footer.php'); ?>