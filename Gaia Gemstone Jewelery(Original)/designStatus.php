
<html>
<body>
 
<?php include "header.php"; ?> 
<?php
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);



$ID = $_GET['ID'];
$Status = $_GET['Status'];

$sql="UPDATE Designs SET Dsn_Complete='$Status' WHERE Dsn_ID = '$ID'";
 
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
?>
<div id="container">
<?php
echo "Status Updated";

echo "<br>Click <a href='designs.php'> here </a>to go back to Designs";
mysql_close($conn);
?>
</div>
</body>
</html>