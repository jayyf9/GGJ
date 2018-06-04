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

$query="SELECT * FROM Purchases INNER JOIN Items ON Purchases.Purch_ItemID=Items.Item_ID";
$resultSet = mysql_query($query) or die(mysql_error());

?>

<div id="container">
<h2>All purchases</h2>
<div id="filter">
  <select>
<option>Incomplete</option>
<option>In progress</option>
<option>Completed</option>
  </Select>
</div>  
<table class="Designs" cellpadding="10" border="1">


<tr>
<th>
    User ID
</th>
<th>
    Item ID
</th>
<th>
    Item Name
</th>
<th>
    Item Quantity
</th>
<th>
    Purchase Date
</th>
<th>
    Gift Wrap
</th>
</tr>


<?php

while ($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))
 {
?>
<tr>
<td><a href="PurchaseDetails.php">
    <?php echo $row['Purch_UserID']; ?>
</a></td>
<td><a href="PurchaseDetails.php">
    <?php echo $row['Purch_ItemID']; ?>
</a></td>
<td><a href="PurchaseDetails.php">
    <?php echo $row['Item_NAME']; ?>
</a></td>
<td><a href="PurchaseDetails.php">
    <?php echo $row['Purch_Qty']; ?>
</a></td>
<td><a href="PurchaseDetails.php">
    <?php echo $row['Purch_Date']; ?>
</a></td>
  <td><a href="PurchaseDetails.php"><?php
    if ($row['Purch_Gift'] == 0)
    {echo "No";}
    else
    {echo "Yes";}
    ?>
  </td></a>
</tr>
<?php
}
?>

</table>

</div>

<?php include "footer.php"; ?>

  </body>
</html>