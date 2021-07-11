<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$to = "info@cni.edu.np";
$to = "abhiyanthapa2222@gmail.com";
$to = "cloudnineinstitute@gmail.com";
$subject = "Mail From Cloud Nine Institute";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n mobile =" . $mobile . "\r\n  Message = " . $message;
$headers = "From: noreply@cni.edu.np" . "\r\n" .
    "CC: info@cni.edu.np";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:../thankyou.php");
