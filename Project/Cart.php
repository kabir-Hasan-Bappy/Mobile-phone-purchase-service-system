<?php include ('index1.php'); ?>	     
	
<br>
<br>
<br>

<h1 style="font-size: 20px; color: darkblue;font-family: arial; font-weight: bold"> Your Shoping Cart</h1>
<hr>
<br>
<br>
<br>
<?php

session_start();

include 'connection.php';

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

	if(isset($_POST['submit']))
	{
			
			
			$p_id = $_POST['p_id'];
			$model = $_POST['model'];
			$brand = $_POST['brand'];
			

					$q = "select * from product where p_id = $p_id ";
					
	
					$result = mysqli_query($con,  $q) or die("Error in Selecting Data");

					while($r = mysqli_fetch_row($result))
					{
						$items[] = $r;				
					}

		$itemArray = array($items[0][0]=>array('Proid' => $items[0][0], 'model' => $items[0][1], 'brand'=>$items[0][2], 'quan'=>$_POST["quantity"], 'price'=>$items[0][4], 'image'=> $items[0][6]));
		
		$_SESSION['cart'] += $itemArray;
		
		
	}
	


			elseif(empty($_SESSION['cart']))
			{				
				echo "<center><h2 style = 'color:red;font-family:Bahnschrift SemiLight;font-weight:bold;font-size:30px'>There is No Items in Your Cart!</h2></center>";
			}
	

			elseif(isset($_GET['action']))
			{
				foreach($_SESSION["cart"] as $k => $v) 
				{
					if($_GET["id"] == $k)
					{
						unset($_SESSION["cart"][$k]);				
						
					}
					
				}	
					if(empty($_SESSION['cart']))
					{
			
						echo "<center><h2 style = 'color:red;font-family:Bahnschrift SemiLight;font-weight:bold;font-size:30px'>There is No Items in Your Cart!</h2></center>";
			
					}
				
	}


	
	
echo "<table  width = 100% cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:bold;border:1px solid;text-align: 'center';> <tr align = center  style = 'background-color:#D6EAF8  ;'>";

echo "<b>  <td> <strong> Image <td> <strong> Model  <td> <strong> Brand <td><strong> Price <td><strong> Quantity <td> <strong>Sub Total </td> <td><strong> Action </td> <tr>";

	
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
	
	$i = $item['Proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	
	echo "<td align = 'center'><img src = 'uploads/".$item['image']."' height = 120 width = 120>";
	echo "<td align = 'center'> ".$item['model'];
	echo "<td align = 'center'> ".$item['brand'];
	echo "<td align = 'center'> ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];	
	echo "<td align = 'center'>".$tp;
	echo "<td align = 'center'> <a href ='Cart.php?action&id=$i'> <img src = 'images/cross.jpg' height = 15 width = 15> </a> </td>";
	
	echo "<tr>";
	
	
}

	echo "</tr>";
	echo "<tr style = 'background-color:#D6EAF8  ;'> <td colspan = 5 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>".$tp2;
	echo " <td></tr></table>";		
	

?>
<br>
<br>


<div style="float: right;">
<?php
if(!empty($_SESSION['cart']))
	{
		echo "<a href = 'checkOut.php'><Button class = 'Addtocart'> Check Out </button> </a>";
		
	}
	?>
	</div>

<br>
<br>
<br>
<br>
<br>
<br>
<?php include ('footer.php'); ?>