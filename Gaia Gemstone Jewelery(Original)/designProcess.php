<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<html>

<head>
<title>Gaia Gemstone Jewellery</title>
<?php include "header.php"; ?>
</head>


<body> 
<?php
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);

$UserID=$_SESSION['User_ID'];
$Other = $_GET['Other'];
$Gem = $_GET['Gem'];
$Item = $_GET['Item'];
$Size = $_GET['Size'];
$Quantity = $_GET['Quantity'];
?>

<div id="container">

<?php
$sql="INSERT INTO Designs (Dsn_UserID, Dsn_Type, Dsn_Size, Dsn_Req, Dsn_Gem, Dsn_Quantity, Dsn_Gift, Dsn_Date)
VALUES('$UserID', '$Item', '$Size', '$Other', '$Gem', '$Quantity', 0, now())";
 
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo 
"Your will recieve an email when your design has been processed where you can view your quote and other details.
You can also log in and view your designs simply by selecting it from the accounts page.
<br>
<br>
<b> Details on your design: </b> <br>
Item = $Item <br>
Size = $Size <br>
Gemstone = $Gem <br>
Other = $Other <br>
Quantity = $Quantity";

mysql_close($conn);
?>

</div>
    
<?php include "footer.php"; ?>
</body>
</html>