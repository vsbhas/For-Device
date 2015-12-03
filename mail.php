<?php
include("class.phpmailer.php");
include("class.smtp.php");
$mail = new PHPMailer();
extract($_POST);
$mail->IsSMTP();
$mail->SMTPAuth   = true; 
$mail->SMTPDebug = 1;          
$mail->SMTPSecure = "ssl";          
$mail->Host       = "smtp.gmail.com";
$mail->Port       = 465;
$mail->Timeout = 3600;
$mail->Username   = "gatnproject@gmail.com";
$mail->Password   = "Admin@12345";
$mail->From       = "mdms@dummy.com";
$mail->FromName   = "contact";
$mail->Subject    = "SubjectLine";
$mail->AltBody    = "BodyLine"; 
$mail->WordWrap   = 50;
$mail->MsgHTML("<br>Name: $name  <br>Email: $email  <br>Subject: $subject <br>Message : $message");
$address = "";//enter the mail id, to which u want to receive the message sent from contact us form.
$mail->AddAddress($_POST['email']);
$mail->IsHTML(true);
if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{	
  echo "<div> Message has been sent </div>";  
}
?>
