


<center>
<div style="margin-top: 20px;background-color: lightgray;width: 400px;height: 300px">
<h1 style="font-style: Arial;font-size: 40px;color: darkblue;">Gadget N Gadget</h1>

<h2> INVOICE</h2>


<?php
//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'gng');
?>

		<div>
		<p>Select Order ID</p>
		<br>
		<form method='get' action='invoice-db.php'>
			<select name='invoiceID'>
				<?php
					//show invoices list as options
					$query = mysqli_query($con,"select * from c_order ORDER BY o_id DESC");
					while($invoice = mysqli_fetch_array($query)){
						echo "<option value='".$invoice['o_id']."'>".$invoice['o_id']."</option>";
					}
				?>
			</select>
			<input type='submit' style="height: 30px;background-color: white;font-weight: bold" value='Generate'>
		</form>
		</div>
	
</div></center>