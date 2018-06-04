
<html>
<body>
 
<?php include "header.php"; ?> 
<?php
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
 $dbname = 'GGJewellery';
 mysql_select_db($dbname);


?>
<div id="container">
<?php
echo "Status Updated";

echo "<br>Click <a href='Purchases.php'> here </a>to go back to Purchases";
mysql_close($conn);
?>
</div>
</body>
</html>