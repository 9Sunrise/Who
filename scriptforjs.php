<?php 
$sqlhost="localhost"; $sqluser="root"; $sqlpass=""; $bd="dyplom";
$connection=mysqli_connect($sqlhost,$sqluser,$sqlpass);
$connection->set_charset("utf8");	
 mysqli_connect($sqlhost,$sqluser,$sqlpass) or die ("Без доступу!".mysql_error());
 mysqli_select_db($connection,$bd) or die ("з'єднання відсутнє".mysql_error());

$sql1 = "SELECT count(*) FROM statistik WHERE Color='Black'";
$res1=mysqli_query($connection,$sql);

$sql2 = "SELECT count(*) FROM statistik WHERE Color='White'";
$res2=mysqli_query($connection,$sql);

$sql3 = "SELECT count(*) FROM statistik WHERE Color='Yellow'";
$res3=mysqli_query($connection,$sql);

$sql4 = "SELECT count(*) FROM statistik WHERE Color='Green'";
$res4=mysqli_query($connection,$sql);

$sql5 = "SELECT count(*) FROM statistik WHERE Color='Red'";
$res5=mysqli_query($connection,$sql);

$sql6 = "SELECT count(*) FROM statistik WHERE Color='Blue'";
$res6=mysqli_query($connection,$sql);

$sql7 = "SELECT count(*) FROM statistik WHERE Color='Purple'";
$res7=mysqli_query($connection,$sql);

/*$arrLabels = array("Black","White","Yellow","Green","Red","Blue","Purple");

print (json_encode($arrReturn));*/

$Colors='';
$temperaturs='';
$mills='';

?>