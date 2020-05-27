<form>
<link href="style.css" rel="stylesheet">
<body  background="background1.jpg">
<div class="top-menu">
  <ul class="menu-main">
    <li class="left-item">ARDUINO HELPER EYE</li>
	<li class="navbar-logo"><img src="logo.png"></li>
	<li class="right-item">FOR PEOPLE WITH VISION PROBLEM</li>
</ul>
</div>
<div class="content">
<div class="class-right">
<h1>Датчик кольору</h1>
<h2>Останній зареєстрований колір: 
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
</h2> 
</div>
<div class="class-center">
<h1>Датчик температури</h1>
<h2>Остання зареєстрована температура: 
<?php 
$sqlhost="localhost"; $sqluser="root"; $sqlpass=""; $bd="dyplom";
$connection=mysqli_connect($sqlhost,$sqluser,$sqlpass);
$connection->set_charset("utf8");	
 mysqli_connect($sqlhost,$sqluser,$sqlpass) or die ("Без доступу!".mysql_error());
 mysqli_select_db($connection,$bd) or die ("з'єднання відсутнє".mysql_error());

 $sql="SELECT Temperature FROM statistik ORDER BY Id_count DESC LIMIT 1";
 $result=mysqli_query($connection,$sql);
 while ($row = $result->fetch_row()) {
 printf ("%s\n", $row[0], $row[1]);}
?> C
</h2>
</div>
<div class="class-left">
<h1>Датчик відстані</h1>
<h2>Останній звіт відстані:
<?php 
$sqlhost="localhost"; $sqluser="root"; $sqlpass=""; $bd="dyplom";
$connection=mysqli_connect($sqlhost,$sqluser,$sqlpass);
$connection->set_charset("utf8");	
 mysqli_connect($sqlhost,$sqluser,$sqlpass) or die ("Без доступу!".mysql_error());
 mysqli_select_db($connection,$bd) or die ("з'єднання відсутнє".mysql_error());

 $sql="SELECT Distance FROM statistik ORDER BY Id_count DESC LIMIT 1";
 $result=mysqli_query($connection,$sql);
 while ($row = $result->fetch_row()) {
 printf ("%s\n", $row[0], $row[1]);}
?>
</h2> 
</div>
<div class="class-statistic">
<h2>Статистика зібрана приладом</h2>
<canvas id="myChart"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<script src="jsscript.js"></script>
</div>
</div>
</body>
</form>
