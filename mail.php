<?php
$mail['to'] = 'psibi2000@gmail.com';
$mail['from'] = $_POST['email'];
$mail['subject'] = $_POST['subject'];
$mail['message'] .= $_POST['message'];
$mail['header'] = 'From: '.$_POST['Name'].'<'. $mail['from'] . ">\r\n";

$mail['status'] = @mail($mail['to'], $mail['subject'], $mail['message'], $mail['header']);
if ($mail['status'] == false) {
    echo 'Failed to send mail to ' . $mail['to'] . '.Error: ' . error_get_last();
    exit;
}
else{
 echo 'Thank You we will Resond Soon';
 }
?>