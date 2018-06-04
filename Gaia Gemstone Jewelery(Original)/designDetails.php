<link rel="stylesheet" type="text/css" href="css/unibookStyle.css" />
<html>

<?php
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);

$ID = $_GET ['ID'];


$query="SELECT * FROM Designs WHERE Dsn_ID = $ID";
$resultSet = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($resultSet, MYSQL_ASSOC);

$UserID = $row['Dsn_UserID'];

$query2="SELECT * FROM Users WHERE User_ID = $UserID";
$resultSet2 = mysql_query($query2) or die(mysql_error());
$row2 = mysql_fetch_array($resultSet2, MYSQL_ASSOC);

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

<h2 style="padding-bottom:-60px;">Design Details</h2>
<a href="Designs.php">Back</a>
<form action="DesignStatus.php?ID=<?php echo $ID ?>">
<input value="<?php echo $row['Dsn_ID']; ?>"name="ID" type="hidden" />
<table class="Designs" border="2">
<tr><th>Name</th><th>Email</th><th>Design Type</th><th>Gemstone</th></tr>

<tr><td><?php echo $row2['User_Forename']; ?> <?php echo $row2['User_Surname']; ?></td><td><?php echo $row2['User_Email']; ?></td><td><?php echo $row['Dsn_Type']; ?></td><td><?php echo $row['Dsn_Gem']; ?></td></tr>


<tr><th>Size</th><th>Quantity</th><th>Gift wrapped?</th><th>Status</th></tr>

<tr><td><?php echo $row['Dsn_Size']; ?></td><td><?php echo $row['Dsn_Quantity']; ?></td>
  
  <td><?php
    if ($row['Dsn_Gift'] == 0)
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
    </select></td></tr>

<tr><th colspan="4">Design Requirements</th></tr>

<tr><td colspan="4"><?php echo $row['Dsn_Req']; ?></td></tr>
<tr><th colspan="4"><button type="submit">Update</button></th></tr>
</form>
</table>




</div>
<?php 
mysql_close($conn);
?>
</body>
<?php include "footer.php"; ?>
</html>