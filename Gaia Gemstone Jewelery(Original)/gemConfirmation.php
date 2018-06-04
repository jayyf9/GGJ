<link rel="stylesheet" type="text/css" href="css/unibookStyle.css" />
<html>

<?php
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
 $dbname = 'GGJewellery';
 mysql_select_db($dbname);
$sql="SELECT * FROM Gemstones";
 
$result = mysql_query($sql) or die(mysql_error());

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }


?>
<head>
<title>Gaia Gemstone Jewellery</title>
<?php include "header.php"; ?>
</head>

<body>
<table>
<div id="container">
<?php
//session_start();

// $Name = $_SESSION['Name'];
// $Price = $_SESSION['Price']; 
// $Desc = $_SESSION['Desc']; 
// $Type = $_SESSION['Type']; 
// $Quantity = $_SESSION['Quantity']; 
// $Size = $_SESSION['Size']; 


echo "Record added:
Name =  
Desc = 
Star Sign = ";
?>
</table>
</div>
<?php
mysql_close($conn);
?>
</body>
<?php include "footer.php"; ?>
</html>