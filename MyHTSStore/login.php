<?php
include '../MyHTSStore/connect.php';
session_start();
$password=md5($_GET['Pw']);
$safe_variable=mysql_real_escape_string($_GET['Namnet']);
$logintry = "SELECT * FROM `inloggning` WHERE `Username`=\"$safe_variable\" and `Password`=\"$password\"";
echo $logintry;
$result = mysql_query($logintry);
$num_rows = mysql_num_rows($result);
if($num_rows!=0){
header('Location: http://127.0.0.1/htsstore/MyHTSStore/LoggedIn.php');
}
else
{
header('Location: http://www.google.se/');
}
mysql_close($link);
?>

