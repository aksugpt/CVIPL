<?php
//get data from form  

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$company = $_POST['company'];
$email= $_POST['email'];
$number= $_POST['number'];
$text= $_POST['text'];

$to = "trade.cvi@gmail.com";
$subject = "Mail From Click Vision";
$txt ="firstName = ". $firstName ."\r\n lastName =" . $lastName . "\r\n  company = " . $company . "\r\n  Email = " . $email . "\r\n Mobile Number =" . $number . "\r\n Text =" . $text;
$headers = "From: noreply@clickvisioninternational.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>