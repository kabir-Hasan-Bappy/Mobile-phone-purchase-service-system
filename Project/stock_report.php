<?php include 'aheader.php';?>

<?php include 'connection.php';?>





	<br>
	<br>
	<div>
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
	
	From:&nbsp;  <input type="date" name="fdate" > &nbsp; &nbsp; &nbsp; &nbsp;  To:&nbsp;  <input type="date" name="tdate" > &nbsp; &nbsp; &nbsp;<button style="background-color: powderblue;color: black;height:30px;font-size: 18px;font-weight: bold ;" name="search">Search</button> <a style="background-color:white;color: black;height:30px;font-size: 18px;font-weight: bold ;"  href="stock_report.php">Refresh</a>
	<button style="background-color: beige;height:30px;font-size: 18px;font-weight: bold; " class="csh" type="button" class="submitbtn" name="print" onclick="printDiv('print')"><b>Print</b></button>
</div>

 </form>
<br>
<br>


<div id="print">

				<h2 style="font-size: 25px; font-family: arial;font-weight: bold;text-align: center">Stock Report</h2>
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
<div class="stock">

<?php

$q="SELECT * FROM product";
$result=mysqli_query($con, $q);



echo" <table  width = 1500 cellspacing = 8 cellpadding = 5 border= 2 style='font-family:Futura Lt BT; font-weight:400;'>
<tr align = center  style = 'background-color:#DC7633;color:black;font-weight:bold;'>
<th>Product ID</th>
<th>Model</th>
<th>Brand</th>
<th>Unit Price</th>
<th>Quantity</th>
<th>Adding Date</th>
</tr>";

$qty=0;


if(isset($_POST['search']))

{
$b_name=$_POST['b_name'];
$from_date = $_POST['fdate'];
$to_date = $_POST['tdate'];

if (isset($_POST['b_name'])) {


	$result = mysqli_query($con, "SELECT * FROM product WHERE b_name='$b_name'");

while($row=mysqli_fetch_array($result)){
	
	$product_id=$row['p_id'];
	$sql2=mysqli_query($con, "SELECT quantity FROM product WHERE p_id='$product_id'");
	$row2=mysqli_fetch_array($sql2);
	if ($row2['quantity']>0) {
		echo" <tr>";
		echo" <td align='center'>".$row['p_id']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['add_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
	
}
else
	{
		echo" <tr style='background-color:#ff1a1a;'>";
		echo" <td align='center'>".$row['p_id']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['add_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
	}
}

if(!empty($_POST['fdate']) && !empty($_POST['tdate'])) {
	$result = mysqli_query($con, "SELECT * FROM product WHERE product.add_date>= '$from_date' AND product.add_date<= '$to_date'");

while($row=mysqli_fetch_array($result)){
	
		$product_id=$row['p_id'];
	$sql2=mysqli_query($con, "SELECT quantity FROM product WHERE p_id='$product_id'");
	$row2=mysqli_fetch_array($sql2);
	if ($row2['quantity']>0) {
		echo" <tr>";
		echo" <td align='center'>".$row['p_id']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['add_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
	
}


else
	{
		echo" <tr style='background-color:#ff1a1a;'>";
		echo" <td align='center'>".$row['p_id']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['add_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
	}

}


}
}
}


else {
	$result = mysqli_query($con, "SELECT * FROM product");

while($row=mysqli_fetch_array($result)){
		
		$product_id=$row['p_id'];
	$sql2=mysqli_query($con, "SELECT quantity FROM product WHERE p_id='$product_id'");
	$row2=mysqli_fetch_array($sql2);
	if ($row2['quantity']>0) {
		echo" <tr>";
		echo" <td align='center'>".$row['p_id']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['add_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
	
}
else
	{
		echo" <tr style='background-color:#ff1a1a;'>";
		echo" <td align='center'>".$row['p_id']. " </td>";
		echo" <td align='center'>".$row['model']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['price']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['add_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
	}


}
}
	
echo "<tr style = 'background-color:#D6EAF8  ;'> <td></td>
 <td colspan = 3  align = right>Total Quantity : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>".$qty;
echo " <td></tr>";




echo "</table>";


mysqli_close($con);




 ?>
 </div>
</div>

	</div>



		<!-- <div style="height: 60px;width: 160px; background-color: red; margin-bottom: : 1500px">
Total Sell: <br> <?php echo $qty;?>
 </div> -->
<?php 
?>
<script>
	function printDiv(div_name) {
     var printContents = document.getElementById(div_name).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>                                                                                                  