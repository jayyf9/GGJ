<!-- This page is where new gems are added -->

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
<?php
$rows = mysql_fetch_array($result)
?>
<form action="AddGemProcess.php" method="post" enctype="multipart/form-data"><h1>Add a Gemstone:</h1>
Gemstone Name:<br>
<input id="Name" name="Name"/>
</br>
Details of Gemstone: (Min: 1000 char)<br>
<textarea rows="4" cols="30" name="Desc" id="Desc" ></textarea><br>
</br>
Zodiac Sign:
<select id="Zodiac" name="Zodiac">
<option>Aries</option>

<option>Taurus</option>

<option>Gemini</option>

<option>Cancer</option>

<option>Leo</option>

<option>Virgo</option>

<option>Libra</option>

<option>Scorpio</option>

<option>Sagittarius</option>

<option>Capricorn</option>

<option>Aquarius</option>

<option>Pisces</option>
</select>

<br>
<br>

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