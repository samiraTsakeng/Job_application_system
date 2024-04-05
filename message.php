<?php
// let's get all form values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message =$_POST['message'];

if(!empty($email) && !empty($message)){// if email and message are not empty
if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if user email is invalid
 $receiver = "tsakengsamira@gmail.com"; //receiver email address
 $subject = "From: $name <$email>"; //subject of the email. It will look like: form (name) <abc@gmail.com>
//merging concating all user values inside budy variable. \n is used to go to the new line
 $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n\nRegards, \n$name";
$sender = "From: $email";
if(mail($receiver, $subject, $body, $sender )){ // mil is inbuilt php fxn to send email
    echo "Your message has been sent";
}else{
    echo "Sorry failed to send your message!";
}  
}else{
    echo "enter a valid email address!";
}
}else{
    echo "Email and password field is required!";
}
?>