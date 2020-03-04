<?php  include('connection.php'); ?>
<?php 
function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}

 ?>

<?php 


if(isset($_POST['verify']))
  {
$validation_code=$_POST['v_code'];
$email=$_POST['mail'];

      if($email)
      {

       

        $subject="Verification Code";

        $message="Here is your password reset code {$validation_code}";

        $headers="From: Gadget N Gadget";
        

        if(!send_email($email,$subject,$message,$headers))
        {
          echo "Email could not be sent";
        }

        // set_message("<p class='bg-success' text-center>Please check your email or spam folder for a password reset code</p>");

        //include 'userlogin.php';

      }else{

        echo "This email does not exist";
      }

    }

if(isset($_POST['submit']))
  {
$validation_code=$_POST['v_code'];
$email=$_POST['mail'];
$mail_verification_code=$_POST['mail_v_code'];


   if ($validation_code==$mail_verification_code) {

    echo "<script>alert('Your verification code is right!!!'); 
    window.location='reset.php?mail=$email'</script>";
   
  // header('location: Changepassword.php');
 }
 else{
  echo "Verification Code not valid";
 }

}
 ?>