<?php
include '../MyHTSStore/connect.php';
         $query = "SELECT * FROM `inloggning` WHERE `ID`";	
         $result = mysql_query($query);
		 print_r($result);
         if ($result === false) {
	         echo 'det gick inte';
        }

         $num= mysql_num_rows($result);
		 print_r($num);
         if($num==0) {
             echo '<strong>Your question is empty</strong>';
         }
         else {
             echo "<ul>";
             for ($i=0;$i<$num;$i++) {
                 $temp = mysql_fetch_array($result);
	             echo "<li>" . $temp[1] . "</li>";
             }
             echo "</ul>";
        }
?>