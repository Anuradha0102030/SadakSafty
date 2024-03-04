<?php
session_start();
//get data from form  
$name = $_POST['Uname'];
$email= $_POST['Uemail'];
$number =$_POST['Uphone'];
$message= $_POST['Umessage'];
$to = "indaliti01@gmail.com";
$subject = "Drive_Safe";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message."\r\n Mobile Number=". $number;
$headers = "From: $email";
mail($to,$subject,$txt,$headers);
    



//redirect
header("Location:thankyou.php");
?>