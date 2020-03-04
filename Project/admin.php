<?php  include('aheader.php'); ?>

<br>

<center>
		<div style="width:100%;height: 500px; background-color: white">
			
			<?php
			$sql=mysqli_query($con, "SELECT COUNT(c_id) FROM customer WHERE status='1'" );
			$sql2=mysqli_query($con, "SELECT COUNT(c_id) FROM customer WHERE status='0'" );
			$row=mysqli_fetch_array($sql);
			$row2=mysqli_fetch_array($sql2);
			$ta=$row['COUNT(c_id)'];
			$tb=$row2['COUNT(c_id)'];

?>
			<?php 

			$query = "SELECT * FROM product";
			$query_run = mysqli_query($con, $query);

			$qty= 0;
			while ($num = mysqli_fetch_assoc ($query_run)) {
			    $qty += $num['quantity'];
			}
			


			?>
			<?php 

			$query2 = "SELECT * FROM cart";
			$query_run2 = mysqli_query($con, $query2);

			$qty2= 0;
			while ($num2 = mysqli_fetch_assoc ($query_run2)) {
			    $qty2 += $num2['quantity'];
			}

			?>

			<?php 
			$date=date('Y-m-d');
			$status=1;
			$query4 = "SELECT COUNT(quantity) FROM cart where order_date='$date' AND status='$status'";
			$query_run4 = mysqli_query($con, $query4);
			$num4 = mysqli_fetch_array($query_run4);
			$qty4=$num4['COUNT(quantity)'];

			?>

			
			<?php 

			$query3 = "SELECT * FROM c_order";
			$query_run3 = mysqli_query($con, $query3);

			$tp= 0;
			while ($num3 = mysqli_fetch_assoc ($query_run3)) {
			    $tp += $num3['order_amount'];
			}
			?>


	
			 <div style="height: 400px;width: 100%;margin-left: 4%">


				<div style="height: 125px;width: 400px; margin-left: 5%; background-color:#D5DBDB  ;text-align: center;float: left;border-radius: 10px ">
				<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $qty;?></div>
			    <br> 
				 <p style="font-weight:bold; font-size: 30px">Total Stock</p> 
				 </div>

				<div style="height: 125px;width: 400px; margin-left: 8%; background-color:#D5DBDB ;text-align: center;float: left;border-radius: 10px ">
					<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $qty4;?></div>
				 <br> 
				 <p style="font-weight:bold; font-size: 30px">Today's Sell</p> 
				 </div>

				 <br>
				 <br>
				 <br>
				 <br>




				 <div style="height: 125px;width: 400px; margin-left: 5%;margin-top: 2%; background-color: #D5DBDB  ;text-align: center;float: left;border-radius: 10px ">
						<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $qty2;?></div>
				 <br> 
				 <p style="font-weight:bold; font-size: 30px">Total Sell</p> 
				 </div>

				 <div style="height: 125px;width: 400px; margin-left: 8%;margin-top: 2%; background-color: #D5DBDB  ;text-align: center;float: left;border-radius: 10px ">
					<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $tp;?></div>
				 <br> 
				 <p style="font-weight:bold; font-size: 30px">Total Amount</p> 
				 </div>


				 <br>
				 <br>
				 <br>
				 <br>

			 <div style="height: 125px;width: 400px; margin-left: 5%;margin-top: 2%; background-color: #D5DBDB;text-align: center;float: left;border-radius: 10px ">
					<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $ta;?></div>
			 <br> 
			 <p style="font-weight:bold; font-size: 30px">Active Customer</p> 
			 </div>


			 <div style="height: 125px;width: 400px; margin-left: 8%; margin-top: 2%; background-color:#D5DBDB  ;text-align: center;float: left;border-radius: 10px ">
					<div style="font-size: 50px;color: darkblue;font-weight: bold;"><?php echo $tb;?></div>
			 <br> 
			 <p style="font-weight:bold; font-size: 30px">Inactive Customer</p> 
			 </div>

		</div>
		</center>

	