
<?php 
if ($_POST["submit"]) { 
    $ToEmail = 'mobilepurchase808@gmail.com'; 
    $EmailSubject = 'Contact form site'; 
    $mailheader = "From: ".$_POST["mail"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["mail"]."\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"]."\n\n"; 
    $MESSAGE_BODY .= "Email: ".$_POST["mail"]."\n\n"; 
    $MESSAGE_BODY .= "Subject: ".$_POST["sub"]."\n\n"; 
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["msg"])."\n\n"; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
Your message was sent
<?php 
} else { 
}
?>