<?php include ('connection.php'); ?>
<?php 
session_start();


$isloged=false;
if (isset($_SESSION["user_logged"]) && !empty($_SESSION["user_logged"])) {
$isloged=$_SESSION["user_logged"];

}
else
{
  header("Location: http://localhost:8080/new/login.php");
}


?>



<!DOCTYPE HTML>
<head>
<title>Gadget N Gadget</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css">
<script src="js/validation2.js"></script>
<link rel="stylesheet" href="css/middle.css">


<style>

  .in9{
  height: 25px;
  width: 100%;
  padding:5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border:1px solid;
  }
  .in10{
  height: 50px;
  width: 100%;
  padding:5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border:1px solid;
  }
  .in11{
  height: 30px;
  width: 100%;
  padding:5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border:1px solid;
  }
   .in12{
  height: 28px;
  width: 80%;
  padding:5px 10px;
  font-size: 14px;
  border-radius: 5px;
  border:1px solid;
  }

</style>


</head>
<body>
  <div class="wrap">
  <div class="header">
    <div class="headertop_desc">
      <div class="call">
         <p> call us <span class="number">+8801687713808 &nbsp;(10am- 6pm)</span></span></p>
      </div>
      <div class="account_desc">
        <ul>
          <li><a href="register.php">Register</a></li>
          <?php
          if ($isloged==false) { ?>
          <li><a href="login.php">Login</a></li>
          <?php }
          else
          { ?>

          <li><a href="logout.php">Logout</a></li>
          <?php }
          ?>
          
          
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="header_top">
      <div class="logo">
        <a href="index.php"><b style="color: #8A0808;font-size: 30px;font-family: Arial Black">Gadget N Gadget</b></a>
      </div>
        
       
   <div class="clear"></div>
  </div>
  <div class="header_bottom">
        <div class="menu">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>  
            <li><a href="contact.php">Contact</a></li>
            <li><a href="Cart.php">Cart</a></li>
          </ul>
        </div>
        <div class="search_box">
          <form>
            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
          </form>
        </div>
        <div class="clear"></div>
       </div>      
<?php

// session_start();

include 'connection.php';

if(isset($_SESSION['email']))
{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

?>

<br>
<br>




<div style="text-align: center">
<img src="images/sc.jpg" alt="">
</div>
<hr>
<br>

<div style="height: 300px;width: 245px;background-color:#F4F6F6;float: right;margin-top: 50px">
<br>
<form action="#" method="post">
  <p align="center"style="font-weight: bold">Installment Duration</p> <br>
  0% EMI: 
  <div >
<div>
  <input type="radio" name="drone" value="huey"
        >
  <label >None</label>
</div>
  <div>
  <input type="radio"  name="drone" value="3"
         >
  <label >3 Months</label>
</div>

<div>
  <input type="radio"  name="drone" value="6">
  <label >6 Months</label>
</div>
<div>
  <input type="radio"  name="drone" value="12">
  <label >12 Months</label>
</div>

<input type="submit" name="submit" value="Check">

</div>
<?php

$tp2=0;
foreach ($_SESSION["cart"] as $item)
{
    $tp = $item['quan'] * $item['price'];
    $tp2 += $tp;

if (isset($_POST['drone'])) {

        if($_POST["drone"]=="3"){
         $r= $tp2 / 3;
         
        }
        else if($_POST["drone"]=="6"){
           $r= $tp2 / 6;
         
        }
        else if($_POST["drone"]=="12"){
           $r= $tp2 / 12;
         
        }
        else if($_POST["drone"]=="huey"){
           $r="0";
         
        }

}
else{
  $r="0";
}
}


?>
 <br>
Installment: <?php echo number_format((int)$r);?>  BDT/MONTH <br><br><br>

<a href="files/EmiCal.xlsx">&nbsp;<img src = 'images/download.png' height = 20 width = 20>&nbsp;Download</a> &nbsp;&nbsp;
<span>36 months EMI Calculation</span>

</div>

  

</form>




<!--  form -->
<div style="width: 60%">

<form name = "checkout" action="c.php" method="post" >

  
      <table width="1038" border="0" cellspacing="18" cellpadding="5" style="font-family:arial; font-size:20px;font-weight:400;">
        <tr>
          <td colspan="2" style = "background-color:#5D6D7E  ; color:white;"><strong>Shipping Info </strong> </td>
          <td colspan="2"style = "background-color:#5D6D7E  ; color:white;"><strong>Payment Method </strong></td>
         
          <td width="93">&nbsp;</td>
          <td width="112">&nbsp;</td>
        </tr>
        <?php
        $current_user_mail=$_SESSION['email'];
        $sql=mysqli_query($con, "SELECT * FROM customer WHERE email='$current_user_mail'");
        $row=mysqli_fetch_array($sql);
        ?>
        <tr>
          <td width="91">Name </td>
          <td width="172"><input type="hidden" name="name" type="text" class="in9" id="sfname" value="<?php echo $row['name']; ?>" size="20" ><?php echo $row['name']; ?></td>

         
          <td width="20"><div align="center">
              <input name = "payment" type="radio" onClick="c2(this)" value="Cash on delivery" tabindex="12">
          </div></td>
          <td width="181">Cash on delivery </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>  </td>
          <td></td>
          
        
          <td><div align="center">
            <input name = "payment" type="radio" onClick="c(this)" value="emi" tabindex="13" required/>
          </div>
          <td> EMI </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Email </td>
          <td><?php echo $current_user_mail; ?><input type="hidden" name="semail" type="text" class="in9" id="semail" size="20" value="<?php echo $current_user_mail; ?>" ></td>
          <td colspan="4" rowspan="5">   <div id ="creditcard" style="visibility:hidden;">       <table cellspacing="5" cellpadding="5" style = "border :1px solid #07aaf6; border-radius:5px;">
            <tr>
              <td>Installment Duration 
              <td><select name="insdu" class="in12" id="insdu">
                <option selected>3 month</option>
                <option>6 month</option>
                <option>12 month</option>
              </select></td>
            </tr>
            <tr>
              <td>Credit Card Type  
              <td><select name="Ctypes" class="in12" id="Ctypes">
                <option selected>Visa</option>
                <option>MasterCard</option>
              </select></td>
            </tr>
            <tr>
              <td>Name on Credit Card  
              <td><input name="Nc" type="cname" pattern="[a-zA-Z][a-zA-Z\s]*"  class = "in12" id="Nc"></td>
            </tr>
            <tr>
              <td>Credit Card Number 
              <td><input name="CCno" type="cnum" pattern="^[0-9]" min="0" class = "in12" id="CCno" maxlength = 16>                  </td>
            </tr>
           
            <tr>
              <td>Expiration Date 
              <td><select name="mon" class="in12" id="mon">
                      <option selected="selected">Month</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                    <br>
                    <br> 
                      <select name="yer" class="in12" id="yer">
                        <option>Year</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                    </select></td>
            </tr>
           
            
                    </table> </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Address </td>
          <td><textarea name="Address" cols = 23  rows = 3 class = "in10" tabindex="4" required></textarea></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> City </td>
          <td><select name="city"  class="in11" tabindex="5">
      <option value="Dhaka" selected="">Dhaka</option>
  
                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
         <td> Contact </td>
          <td><input name="contact" type="tel" class = "in9" id="contact" placeholder=" Phone" tabindex="9" maxlength = 11 pattern="[0][1][5-9]{1}[0-9]{8}" required/></td>
          <td colspan="6" rowspan="5">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
      
          
        </tr>
        <tr>
          
          <td colspan="5"><strong><p style = "background-color:#5D6D7E  ; color:white; padding:5px;">CheckOut Summery </p></strong></td>
        </tr>
        <tr>
          

<?php

echo "<table cellspacing = 6 cellpadding = 3 width = 700> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<b><td> <strong> Model <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td><tr>";		
	
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
	
	$i = $item['Proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	
	//echo "<td align = 'center'><img src = '".$item['image']."' height = 90 width = 90>";
	echo "<td align = 'center'> ".$item['model'];
	echo "<td align = 'center'> ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];	
	echo "<td align = 'center'>".$tp;
	
	echo "<tr>";
	
	
}

	echo "</tr>";
	echo "<tr style = 'background-color:#e8e9e7;border:1px solid'> <td colspan = 3 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong> ` </font>".$tp2;;
	echo "<td> </tr></table>";	
?>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="6">   
          <br>
          <br>       
            
            <div style="float: right;margin-right: -400px">
             <button name="submit" type="submit" > <a href="c.php"> <img src="images/order.gif" height="90px" width="350px" alt="" /></a></button>
            </div></td>
        </tr>
      </table>
</form>
</div>

<?php	
}

else
	
{
	header("Location: http://localhost:8080/new/login.php");
}


?>

<br>
<br>
<br>
<br>
<br>



<?php include ('footer.php'); ?>