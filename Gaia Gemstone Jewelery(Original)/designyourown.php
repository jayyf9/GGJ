<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/unibookStyle.css" />
<html>

<?php
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin

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
<form action="Designprocess.php">
<h1>Design your own</h1>
<h4>Here you can create your own piece of jewellery detailing the type of item, gemstone and any extra details. Once this has been processed you will receive an email from us giving you details on your design and a quote price for the design.</h4>
<th>Item Type:<br></th>
<select name="Item" id="Type">
<option value="Necklace">Necklace</option>
<option value="Bracelet">Bracelet</option>
<option value="Earrings">Earrings</option>
<option value="Other">Other</process.php?Item=Necklace&Quantity=1&Size=5option>
</select></br>
</br>
Gemstone:<br>
<select name="Gem" id="Gem">
<?php
while($rows = mysql_fetch_array($result)) {

$Gem_Name = $rows['Gem_Name'];
?>


<option value="<?php echo "$Gem_Name" ?>"><?php echo "$Gem_Name" ?></option>
<?php
}
?>
</select><br>
</br>
Quantity:<br>
<select name="Quantity" id="Quantity">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><br>
</br>
Bracelet/necklace Size (Inches)<br>
<select name="Size" id="size">
<option value="Bracelet">Bracelet</option>
Bracelet
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
Other requirements:<br>
<textarea rows="4" cols="30" name="Other" id="Other" ></textarea><br>
</br>
Gift Wrapping required: (£3)
<input type="checkbox" id="Gift"/>
</br>
</br>
Date required for: (DD/MM/YYYY)<br>
<input type="Date" id="Date"/></br>
</br>
<button type="submit">Submit</button>
</form>
</table>
</div>
<?php
mysql_close($conn);
?>
</body>
<?php include "footer.php"; ?>
</html>