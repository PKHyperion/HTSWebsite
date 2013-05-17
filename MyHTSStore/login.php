<?php
include '../MyHTSStore/connect.php';
session_start();
$password=md5($_GET['Pw']);
$password=md5('$password');
$password=md5('$password');
$logintry = "SELECT * FROM `inloggning` WHERE `Username`=\"$_GET[Namnet]\" and `Password`=\"$password\"";
$result = mysql_query($logintry);
$num_rows = mysql_num_rows($result);
if($num_rows!=0){
header('Location: www.google.se');
}
else
{
header('Location: http://localhost/HTS/hemsidan/logga_in.php');
}
mysql_close($link);
?>