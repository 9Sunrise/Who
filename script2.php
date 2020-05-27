<?php 
$sqlhost="localhost"; $sqluser="root"; $sqlpass=""; $bd="dyplom";
$connection=mysqli_connect($sqlhost,$sqluser,$sqlpass);
$connection->set_charset("utf8");	
 mysqli_connect($sqlhost,$sqluser,$sqlpass) or die ("Без доступу!".mysql_error());
 mysqli_select_db($connection,$bd) or die ("з'єднання відсутнє".mysql_error());

 $sql="SELECT Color FROM statistik ORDER BY Id_count DESC LIMIT 1";
 $result=mysqli_query($connection,$sql);
 while ($row = $result->fetch_row()) {
 printf ("%s\n", $row[0], $row[1]);}
?>