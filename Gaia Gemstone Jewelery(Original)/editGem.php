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

$query="SELECT * FROM Gemstones";
$resultSet = mysql_query($query) or die(mysql_error());

?>

<div id="container">
<h2>Edit Gemstones</h2>
 
<table class="Designs" cellpadding="10" border="1">


<tr>
<th>
    ID
</th>
<th>
    Name
</th>
<th>
    Description
</th>
<th>
    Image Name
</th>
<th>
    Zodiac Sign
</th>
</tr>


<?php

while ($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))
 {
?>
<tr>
<td><a href="EditGemDetails.php">
    <?php echo $row['Gem_ID']; ?>
</a></td>
<td><a href="EditGemDetails.php">
    <?php echo $row['Gem_Name']; ?>
</a></td>
<td><a href="EditGemDetails.php">
    <?php echo $row['Gem_Desc']; ?>
</a></td>
<td><a href="EditGemDetails.php">
    <?php echo $row['Gem_Image']; ?>
</a></td>
<td><a href="EditGemDetails.php">
    <?php echo $row['Gem_Zodiac']; ?>
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