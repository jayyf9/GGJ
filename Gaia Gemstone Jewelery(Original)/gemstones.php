<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<html>

<head>
<title>Gaia Gemstone Jewellery</title>
<?php include "header.php"; ?>
</head>



<?php
// standard PHP to MySQL database select script
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);

$page = $_GET['page'];
$items = $_GET['items'];
$Zodiac = $_GET['Zodiac'];
$check = $items;

if ($page == NULL ) 
{
	$page = 0;
}
else
{
	$page = $page;
}

if ($items == NULL) 
{
	$items = 0;
}
else
{
	$items = $items;
}
$total = $items + 8;

$query = "SELECT * FROM Gemstones WHERE Gem_ID BETWEEN $items AND $total"; 

//AND Gem_Zodiac = '$Zodiac'

$resultSet = mysql_query($query);

$query2 = "SELECT * FROM Gemstones ORDER BY Gem_ID DESC LIMIT 1";
$resultSet2 = mysql_query($query2);
$row2 = mysql_fetch_array($resultSet2, MYSQL_ASSOC);

$query3 = "SELECT * FROM Gemstones ORDER BY Gem_ID ASC LIMIT 1";
$resultSet3 = mysql_query($query3);
$row3 = mysql_fetch_array($resultSet3, MYSQL_ASSOC);

?>
<div id="container">

<div id="Filter">
  <table>
<tr><th width="30%">Search:</th><th width="50%">Zodiac Sign:</th><th width="20%">Price:</th></tr>

<tr><form action="Gemstones.php">
<td width="30%" align="center">
<input name="Search" type="text">
<input name="name" type="text" value="0" hidden>
<input name="page" type="text" value="0" hidden>
<input name="items" type="text" value="1" hidden>
</td> 
    <td width="50%" align="center"><select name="Zodiac" style="width:90px;">
      <option value=""> All </option>
      <option> Capricorn </option>
        <option> Sagittarius </option>
            <option> Libra </option>
              <option> Virgo </option>
                <option> Leo </option>
                  <option> Cancer </option>
                    <option> Gemini </option>
                      <option> Taurus </option>
                        <option> Aries </option>
                          <option> Pisces </option>
                            <option> Aquarius </option>
                              <option> Scorpio </option>
  </select></td></td>
  <td><select name="Price">

      <option> Lowest to highest </option>
        <option> Highest to lowest </option>
  </select>
</td>
  <td>
    <button type="submit">Update</button>
  </td>
</tr>
</form>
</div>
  </table>





<table>
    <!-- this is how you interate a resultset from MYSQL as a associative array -->
    <?php
    $counter=2; 
    
    while($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))
    {
$endofarray = $row2['Gem_ID'];
    ?>

<?php 


if ($counter % 10 == 2)
  {
  ?> <tr><td style="padding:10px; teXt-align:center;"><a href="GemDetails.php?Item=<?php echo "{$row['Gem_ID']}"; ?>"> <img style="padding:2px; border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>"><br><?php {echo "{$row['Gem_Name']}";} ?></td></a> <?php
  $counter = 1;
  }
else if ($counter % 10 == 1)
  {
  ?> <td style="padding:10px; teXt-align:center;"><a href="GemDetails.php?Item=<?php echo "{$row['Gem_ID']}"; ?>"><img style="padding:2px; border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>"><br><?php {echo "{$row['Gem_Name']}";} ?></td></a> <?php
  $counter = 10;
  }
else
  {
  ?> <td style="padding:10px; teXt-align:center;"><a href="GemDetails.php?Item=<?php echo "{$row['Gem_ID']}"; ?>"><img style="padding:2px; border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>"><br><?php {echo "{$row['Gem_Name']}";} ?></td></a> <?php
  $counter = 2;
  }
$last=$row['Gem_ID'];
   }   ?>


<div id="pageControl">

<?php
if ($page == 0)
{}
else
{?><a href="Gemstones.php?page=<?php echo $page-1 ?>&items=<?php echo $items-9 ?>">Previous</a> &nbsp; <?php ;}

if(empty($endofarray))
{echo "<br>" . "<br>" . "<br>" . "<br>" . "No results returned, please adjust you filter/search settings";}
else{
if ($last == $endofarray)
{}
else
{?> <a href="Gemstones.php?page=<?php echo $page+1 ?>&items=<?php echo $total+1 ?>">Next</a> <?php ;}
}
?>
</div>
</table>
</div>
</div>

    <?php
    
    mysql_close($conn);
    ?>
<body>
<?php include "footer.php"; ?>
</body>

</html>