<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$destination = $_POST['destination'];
$to = "info@cni.edu.np";
$to = "abhiyanthapa2222@gmail.com";
$to = "cloudnineinstitute@gmail.com";
$subject = "Mail From Cloud Nine Institute";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Destination =" . $destination;
$headers = "From: noreply@cni.edu.np" . "\r\n" .
    "CC: info@cni.edu.np";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:../thankyou.php");
