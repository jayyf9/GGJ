<link rel="stylesheet" type="text/css" href="css/unibookStyle.css" />
<html>

<?php
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);
$query="SELECT * FROM Designs";
$resultSet = mysql_query($query) or die(mysql_error());


if (!mysql_query($query,$conn))
  {
  die('Error: ' . mysql_error());
  }


?>
<head>
<title>Gaia Gemstone Jewellery</title>
<?php include "header.php"; ?>
</head>

<body>
<div id="container">

<h2 style="padding-bottom:-60px;">Designs</h2>
<filter style="float:right;">
<b>Status:</b></br>
<select style="float:right;">
<option>All</option>
<option>Uncompleted</option>
<option>Completed</option>
</select>
</filter>
</br>
</br>
</br>
<table class="Designs" cellpadding="10" border="1">
<tr>
<th>
    User ID
</th>
<th>
    Item Type
</th>
<th>
    Item Gemstone
</th>
<th>
    Item Quantity
</th>
<th>
    Date Required for
</th>
<th>
    Gift Wrapping required
</th>


</tr>

<?php
while ($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))

{


	?>

<tr>
<td>
<a href="DesignDetails.php?ID=<?php echo "{$row['Dsn_ID']}"; ?>">
<?php
echo $row['Dsn_UserID'];
?>
</a>
</td>
<td>
<a href="DesignDetails.php?ID=<?php echo "{$row['Dsn_ID']}"; ?>">
<?php
echo $row['Dsn_Type'];
?>  
</a>  
</td>
<td>
<a href="DesignDetails.php?ID=<?php echo "{$row['Dsn_ID']}"; ?>">
<?php
echo $row['Dsn_Gem'];
?>  
</a>
</td>
<td>
  <a href="DesignDetails.php?ID=<?php echo "{$row['Dsn_ID']}"; ?>">
<?php
echo $row['Dsn_Quantity'];
?>  
</a>
</td>
<td>
  <a href="DesignDetails.php?ID=<?php echo "{$row['Dsn_ID']}"; ?>">
<?php
echo $row['Dsn_Date'];
?>
</a>
</td>
<td>
  <a href="DesignDetails.php?ID=<?php echo "{$row['Dsn_ID']}"; ?>">
<?php
    if ($row['Dsn_Gift'] == 0)
    {echo "No";}
    else
    {echo "Yes";}
    ?>
</td> 
</a>
</td>
</tr>
<?php } ?>
</table>


</div>
<?php 
mysql_close($conn);
?>
</body>
<?php include "footer.php"; ?>
</html>