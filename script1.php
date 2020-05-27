<?php 
$sqlhost="localhost"; $sqluser="root"; $sqlpass=""; $bd="dyplom";
$connection=mysqli_connect($sqlhost,$sqluser,$sqlpass);
$connection->set_charset("utf8");	
 mysqli_connect($sqlhost,$sqluser,$sqlpass) or die ("Без доступу!".mysql_error());
 mysqli_select_db($connection,$bd) or die ("з'єднання відсутнє".mysql_error());

$sql = "LOAD DATA LOCAL INFILE 'c:/rezult.txt' INTO TABLE statistik FIELDS TERMINATED BY '|' LINES TERMINATED BY '*'";
$sql_res=mysqli_query($connection,$sql);
if ($sql_res==1) { echo "ku privet";} else echo "tazasho";
?>