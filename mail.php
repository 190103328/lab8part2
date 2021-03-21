<?php
//echo "Your application has been accepted, we will contact you";
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

$subject = "=?utf-8?B?".base64_encode("Application for order from the site Pinkie Pie")."?=";
$headers = "Form: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$success = mail("190103328@stu.sdu.edu.kz" , $subject, $text, $headers);
echo $success;
?>