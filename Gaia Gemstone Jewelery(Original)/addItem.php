<!-- Form for new Jewellery Items are added here --> 
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
<div id="container">
<form action="AddItemProcess.php" method="post" enctype="multipart/form-data"><h1>Add a new item:</h1>

Item Name:<br>
<input name="Name" id="Name" type="text" /><br>
<br>
Item type:<br>
<select name="Type" id="Type">
<option value="Necklace">Necklace</option>
<option value="Bracelet">Bracelet</option>
<option value="Earrings">Earrings</option>
<option value="Other">Other</process.php?Item=Necklace&Quantity=1&Size=5option>
</select></br>
</br>


Gemstones:<br>
<select name="Gem" id="Gem">
<?php
while($rows = mysql_fetch_array($result)) {
$Gem_Name = $rows['Gem_Name'];?>
<option value="<?php echo "$Gem_Name" ?>"><?php echo "$Gem_Name" ?></option>
<?php
}
?>
</select><br>
<br>

Description:<br>
<textarea rows="4" cols="30" name="Desc" id="Desc" ></textarea><br>
</br>
Item Price:<br>
<input type="text" name="Price" id="Price"/><br>
<br>
Quantity available:<br>
<select name="Quantity" id="Quantity">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><br>
</br>

Bracelet/necklace Size (Inches)<br>
<select name="Size" id="Size">
<option value="Bracelet">Bracelet</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="7.5">7.5</option>
<option value="8">8</option>
<option value="8.5">8.5</option>
<option value="Necklace">Necklace</option>
<option value="14">14</option>
<option value="16">16</option>
<option value="18">18</option>
<option value="20">20</option>
<option value="22">22</option>
<option value="24">24</option>
<option value="26">26</option>
</select></br>
</br>

	<label for="file">Filename:</label>
	<input type="file" name="file" id="file" />&nbsp;
	<input type="submit" name="submit" value="Submit" />
</form>


</table>
</div>
<?php
mysql_close($conn);
?>
</body>
<?php include "footer.php"; ?>
</html>