<?php  include('connection.php'); ?>

<?php 
$mail=$_POST['mail'];
$pass=($_POST['psw']);

if(isset($_POST['button1']))
  {
    $sql="UPDATE customer SET password='$pass' WHERE email='$mail'";
    if (mysqli_query($con, $sql)) {

    echo'
   <script>
   window.onload = function() {
      alert("Your Password have been updated");
      location.href = "login.php";  
   }
   </script>
   ';
    }
  }

  ?>