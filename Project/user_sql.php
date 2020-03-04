<?php 

$user = $_POST['user'];  
if ($user == "ad") {          
    header("Location:http://localhost/GNG/adminlogin.php");      
}
else {
     header("Location:http://localhost/GNG/login.php");   
}          
?>