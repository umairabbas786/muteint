<?php
$to = "mute.dispatchers.int@gmail.com";
$name = $_POST['name'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$from = $_POST['email'];
$txt = $_POST['message'];
$msg = "Name = $name\r\n" . "Phone Number = $phone\r\n" . "Sender = $from\r\n" . "Message = $txt\r\n";
$headers = "From: info@muteint.com";

if(mail($to,$subject,$msg,$headers)){
    echo "Your message has been sent. Thank you!";
}
else{
    echo "Unable to Send Mail";
}
?>