<?php
$to = 'psibi2000@gmail.com';
$from = $_POST['email'];
$subject = "Mail from Contact Form of psibi.in by " . $_POST['name'];
$message = $_POST['comments'];
$headers = 'From: ' . $from;
 
if (mail($to,$subject,$message,$headers))
{
 echo "Thank you. I will write to you soon.";
}
else
{
 echo "Server Problem. Mail me using my mail-id you moron!!";
}

?>
