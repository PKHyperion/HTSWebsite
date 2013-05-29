<?php
include '../MyHTSStore/connect.php';
$reggtry = "SELECT * FROM `inloggning` WHERE `Username`=\"$_GET[Namnet]\"";
$film = mysql_query($reggtry);
$num_rows1 = mysql_num_rows($film);
if ($num_rows1>0){
echo("Detta användarnamn finns redan, var vänlig välj ett annat");
}
else{
$password = md5($_GET['Pw']);
$safe_variable=mysql_real_escape_string($_GET['Namnet']);
$query = "INSERT INTO `htsstore`.`inloggning` (`ID`, `Username`, `Password`) VALUES (NULL, \"$safe_variable\",'$password');";
echo $query;
$result = mysql_query($query);
if ($result === false) {
echo 'Did no qorös';
}
else{
mysql_close($link);
header('Location: http://localhost/htsstore/MyHTSStore/');
}
}
?>