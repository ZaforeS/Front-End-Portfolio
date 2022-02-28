<?php

ini_set( "display_errors" , "on");
error_reporting(E_ALL);
//echo mail("m.umairrazaq@gmail.com","test", "hell") ?"sent" :"error";

$errorMSG = "";

// NAME
$txtname =$_POST['name'];
$txtemail = $_POST['email'];
$txtmessage = $_POST['message'];

$EmailTo = "szafore@gmail.com";
$Subject = "New Message Received from RnC";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $txtname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $txtemail;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $txtmessage;
$Body .= "\n";

// send email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Sender <rowsncolums.co> ' . "\r\n";
$headers .=   "Reply-To: szafore@gmail.com" . "\r\n";
$headers .= "X-Mailer: PHP/" . PHP_VERSION . "\r\n";

$success = mail($EmailTo, $Subject, $Body, $headers );

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
        print_r(error_get_last());
    } else {
        echo $errorMSG;
    }
}

?>