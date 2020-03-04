<?php include 'aheader.php';?>

<?php include 'connection.php';?>

<br>
	<br>

<?php




?>

	
	<div >
		<form action="" method="post">
			<div>

				
 <label style="margin-left: 30%;font-weight: bold">Brand Name</label>
      <input type="dropdown" name="b_name" list="b_name" class="" >
        <datalist id="b_name">
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

        <br>

<div style="margin-left: 20%";>
	
	From:&nbsp;  <input type="date" name="fdate" id="from" > &nbsp; &nbsp; &nbsp; &nbsp;  To:&nbsp;  <input type="date" name="tdate" id="to"> &nbsp; &nbsp; &nbsp;<button style="background-color: powderblue;color: black;height:30px;font-size: 18px;font-weight: bold ;" name="search">Search</button> <a style="background-color:white;color: black;height:30px;font-size: 18px;font-weight: bold ;"  href="sell_report.php">Refresh</a>
	<button style="background-color: beige;height:30px;font-size: 18px;font-weight: bold; " class="csh" type="button" class="submitbtn" name="print" onclick="printDiv('print')"><b>Print</b></button>
</div>

 </form>
<br>
<br>
<div id="print">


		<h2 style="font-size: 25px; font-family: arial;font-weight: bold;text-align: center">Sell Report</h2>
				<br>
				<?php


				if (isset($_POST['search'])) { 
				$fdate=$_POST['fdate'];
				$f_date=strtotime($fdate);
				$fd=date('d-m-Y', $f_date);

				$tdate=$_POST['tdate'];
				$t_date=strtotime($tdate);
				$td=date('d-m-Y', $t_date);



					?>
					<h3 style="font-size: 12px; font-family: arial;font-weight: bold;text-align: center">From: <?php echo $fd;  ?> &nbsp;  &nbsp; To: <?php echo $td;?> </h3>
					<?php
				}
				?>


	
<?php



?>

<?php

$q="SELECT * FROM c_order, cart WHERE c_order.oid=cart.oid";
$result=mysqli_query($con, $q);



echo" <table  width = 1000 border=2 cellspacing = 8 cellpadding = 15 style='font-family:Futura Lt BT; font-weight:400;'>
<tr align = center  style = 'background-color:#DC7633;color:black;font-weight:bold;'>
<th>Order ID</th>
<th>First Name</th>
<th>Contact</th>
<th>Address</th>
<th>City</th>
<th>Mobile Model</th>
<th>Brand</th>
<th>Unit Price</th>
<th>Quantity</th>
<th>Total Price</th>
<th>Payment Method</th>
<th>Order Date</th>
</tr>";

$qty=0;
$totalp=0;


if(isset($_POST['search']))

{
$b_name=$_POST['b_name'];
$from_date = $_POST['fdate'];
$to_date = $_POST['tdate'];

if (isset($_POST['b_name'])) {


	$result = mysqli_query($con, "SELECT * FROM c_order, cart WHERE c_order.o_id=cart.o_id AND cart.b_name='$b_name'");

while($row=mysqli_fetch_array($result)){
	
		echo" <tr>";
		echo" <td align='center'>".$row['o_id']. " </td>";
		echo" <td align='center'>".$row['fname']. " </td>";
		echo" <td align='center'>".$row['contact']. " </td>";
		echo" <td align='center'>".$row['address']. " </td>";
		echo" <td align='center'>".$row['city']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['total_price']. " </td>";
		echo" <td align='center'>".$row['p_method']. " </td>";
		echo" <td align='center'>".$row['order_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
		$totalp +=$row['total_price'];
	
	
}
}

if(!empty($_POST['fdate']) && !empty($_POST['tdate'])) {
	$result = mysqli_query($con, "SELECT * FROM c_order, cart WHERE c_order.o_id=cart.o_id AND c_order.order_date>= '$from_date' AND c_order.order_date<= '$to_date'");

while($row=mysqli_fetch_array($result)){
	
		echo" <tr>";
		echo" <td align='center'>".$row['o_id']. " </td>";
		echo" <td align='center'>".$row['fname']. " </td>";
		echo" <td align='center'>".$row['contact']. " </td>";
		echo" <td align='center'>".$row['address']. " </td>";
		echo" <td align='center'>".$row['city']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['total_price']. " </td>";
		echo" <td align='center'>".$row['p_method']. " </td>";
		echo" <td align='center'>".$row['order_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
		$totalp +=$row['total_price'];
	
	
}
}



}

else {
	$result = mysqli_query($con, "SELECT * FROM c_order, cart WHERE c_order.o_id=cart.o_id");

while($row=mysqli_fetch_array($result)){
		
		echo" <tr>";
		echo" <td align='center'>".$row['o_id']. " </td>";
		echo" <td align='center'>".$row['fname']. " </td>";
		echo" <td align='center'>".$row['contact']. " </td>";
		echo" <td align='center'>".$row['address']. " </td>";
		echo" <td align='center'>".$row['city']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['total_price']. " </td>";
		echo" <td align='center'>".$row['p_method']. " </td>";
		echo" <td align='center'>".$row['order_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
		$totalp +=$row['total_price'];
}
}


	
echo "<tr style = 'background-color:#D6EAF8  ;'> <td colspan = 8 align = right style='font-weight:bold;color:black;' >Total Quantity : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>".$qty;
echo "<td> <td><td> </tr> ";

echo "<tr style = 'background-color:#D6EAF8  ;'> <td colspan = 9 align = right style='font-weight:bold;color:black'>Total Price : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>".$totalp;

echo "<td> <td> </tr> ";




echo "</table>";



mysqli_close($con);

 ?>
 </div>


	</div>


<!-- <div style="height: 100px;width: 150;background-color: white;margin:-80% 0%;">

	<div style="height: 100px;width: 200px; background-color: #A4A4A4; margin-bottom: : 1500px;text-align: center;float: left;border-radius: 10px ">
		<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $qty;?></div>
 <br> 
 <i >Total Sell</i> 
 </div>


 <div style="height: 100px;width: 250px; background-color: #A4A4A4; margin-bottom: : 1500px;text-align: center;float: right;border-radius: 10px ">
		<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $totalp;?></div>
 <br>
 Total Amount
 </div>

 </div> -->

 <br>
 <br><br>
 <br>


<?php 
?>

<br>
 <br><br>
 <br>

 <script>
	function printDiv(div_name) {
     var printContents = document.getElementById(div_name).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>  

