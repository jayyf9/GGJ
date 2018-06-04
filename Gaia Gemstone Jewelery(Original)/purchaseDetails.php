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

$UserID = $_SESSION ['User_ID'];

$query="SELECT * FROM Purchases INNER JOIN Items ON Purchases.Purch_ItemID=Items.Item_ID WHERE Purch_UserID = $UserID";
$resultSet = mysql_query($query) or die(mysql_error());

$query2="SELECT * FROM Users WHERE User_ID = $UserID";
$resultSet2 = mysql_query($query2) or die(mysql_error());
$row2 = mysql_fetch_array($resultSet2, MYSQL_ASSOC);


?>

<div id="container">
<h2>Purchase Details</h2>
<a href="Purchases.php">Back</a>
<form action="PurchaseStatus.php?ID=<?php echo $ID ?>">
<table class="Designs" cellpadding="10" border="1">
<?php while ($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))
 {
?>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Item ID</th></tr>

<tr><td><?php echo $row['Purch_ID']; ?></td><td><?php echo $row2['User_Forename']; ?> <?php echo $row2['User_Surname']; ?></td><td><?php echo $row2['User_Email']; ?></td><td><?php echo $row['Purch_ItemID']; ?></td></tr>

<tr><th>Size</th><th>Item Type</th><th>Item Gemstone</th><th>Price</th></tr>

<tr><td><?php echo $row['Purch_Size']; ?></td><td><?php echo $row['Item_Type']; ?></td><td><?php echo $row['Item_GEMID']; ?></td><td><?php echo $row['Purch_Price']; ?></td> </tr>

<tr><th>Purchase Date</th><th>Quantity</th><th>Gift Wrapped?</th><th>Status</th></tr>
<tr><td><?php echo $row['Purch_Date']; ?></td><td><?php echo $row['Purch_Qty']; ?>
  <td><?php
    if ($row['Purch_Gift'] == 0)
    {echo "No";}
    else
    {echo "Yes";}
    ?>
  </td>
   <td>
    <select name="Status">
      <?php
    if ($row['Dsn_Complete'] == 0)
    {?><option value="0">Not Completed</option><option value="1">In Progress</option><option value="2">Complete</option><?php ;}
    else if ($row['Dsn_Complete'] == 1)
    {?><option value="0">In Progress</option><option value="1">Not Completed</option><option value="2">Complete</option><?php ;}
    else
    {?><option value="0">Complete</option><option value="1">Not Completed</option><option value="2">In Progress</option><?php ;}
      ?>
    </select></td>
    <tr><th colspan="4"><button type="submit">Update</button></th></tr>
  </tr>
<?php
}
?>


</table>
</form>
</div>

<?php include "footer.php"; ?>

  </body>
</html>