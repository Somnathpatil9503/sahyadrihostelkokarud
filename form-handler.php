<?php
$name = $_POST['name'];
$visitor_emial = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = 'patilsomnath516@gmail.com';

$subject = "Mail From Sahyadriwebsite";
$txt = "Name = ".$name . "\r\n Email = ". $email . "\r\n Subject = ". $subject ."
    \r\n Massage = ". $message;

$headers = "From:noreply@sahyadrihostel.com".  "\r\n" .   
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);

}

?>