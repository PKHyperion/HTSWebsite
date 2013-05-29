<form method="get" action="">
<label>Search For: </label><input type="text" name="query" />
<input type="submit" name="submit" value="Start Search" />
<input type="reset" value="Reset"
</form>

<?php
//PHP CODE STARTS HERE

if(isset($_GET['submit'])){
include 'connect.php';
// Change the fields below as per the requirements
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="htsstore";
$db_tb_name="inloggning";
$db_tb_atr_name="name";

//Now we are going to write a script that will do search task
// leave the below fields as it is except while loop, which will display results on screen

mysql_connect("$db_host","$db_username","$db_password");
mysql_select_db("$db_name");

$query=mysql_real_escape_string($_GET['query']);

$query_for_result=mysql_query("SELECT * FROM $db_tb_name WHERE

$db_tb_atr_name like '%".$query."%'");
echo $query_for_result;

echo "<h2>Search Results</h2><ol>";
while($data_fetch=mysql_fetch_array($query_for_result))
{
echo "<li>";
echo substr($data_fetch[$db_tb_atr_name], 0,160);
echo "</li><hr/>";
}
echo "</ol>";

mysql_close();
}
?>