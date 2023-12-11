<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$option = $_POST['bookOpt'];
$phone = $_POST['phone'];
$message= $_POST['message'];
$to = "mayilyane9@gmail.com";
$subject = "Booking From Glendale Limo";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Option =" . $option . "\r\n Phone Number =" . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
