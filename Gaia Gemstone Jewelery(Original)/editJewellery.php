<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  
    <title>Gaia Gemstone Jewellery</title>
      
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    <?php include "header.php"; ?>
  </head>

<?php
// standard PHP to MySQL database select script
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);

$User_ID = $_SESSION ['User_ID'];

$query="SELECT * FROM Items";
$resultSet = mysql_query($query) or die(mysql_error());

?>

<div id="container">
<h2>Edit Items</h2>
 
<table class="Designs" cellpadding="10" border="1">


<tr>
<th>
    ID
</th>
<th>
    Gem ID
</th>
<th>
    Name
</th>
<th>
    Description
</th>
<th>
    Price
</th>
<th>
    Description
</th>
<th>
    Image Path
</th>
<th>
    Type
</th>
<th>
    Quantity
</th>
<th>
    Date
</th>
</tr>


<?php

while ($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))
 {
?>
<tr>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_ID']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_GEMID']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_NAME']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_Price']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_Desc']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item _IMAGE']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_Type']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_Quantity']; ?>
</a></td>
<td><a href="EditItemDetails.php">
    <?php echo $row['Item_Date']; ?>
</a></td>
</tr>
<?php
}
?>

</table>

</div>

<?php include "footer.php"; ?>

  </body>
</html>