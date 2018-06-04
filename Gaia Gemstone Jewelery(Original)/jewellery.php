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
$check = $items;
$Search = $_GET['Search'];
$Zodiac = $_GET['Zodiac'];
$Price = $_GET['Price'];


if ($Search == NULL ) 
{
  $Search = " ";
}
else
{
  $Search = $Search;
}

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


$query3 = "SELECT * FROM Items ORDER BY Item_ID ASC LIMIT 1";
$resultSet3 = mysql_query($query3);
$row3 = mysql_fetch_array($resultSet3, MYSQL_ASSOC);

$query2 = "SELECT * FROM Items ORDER BY Item_ID DESC LIMIT 1";
$resultSet2 = mysql_query($query2);
$row2 = mysql_fetch_array($resultSet2, MYSQL_ASSOC);

$query = "SELECT * FROM Items WHERE Item_ID BETWEEN $items AND $total AND Item_NAME LIKE '%{$Search}%'";
$resultSet = mysql_query($query);

?>

<div id="container">

<div id="Filter">
  <table>
<tr><th width="30%">Search:</th><th width="50%">Zodiac Sign:</th><th width="20%">Price:</th></tr>

<tr>
<form action="Jewellery.php">
<td width="30%" align="center">
<input name="Search" type="text">
<input name="name" type="text" value="0" hidden>
<input name="page" type="text" value="0" hidden>
<input name="items" type="text" value="1" hidden>
</td> 
    <td width="50%" align="center"><select name="Zodiac" style="width:90px;">
      <option> All </option>
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
$endofarray = $row2['Item_ID'];
    
    

if ($counter % 10 == 2)
  {
  ?> <tr><td style="padding:10px; teXt-align:center;"><a href="JewelleryDetails.php?Item=<?php echo "{$row['Item_ID']}"; ?>"> <img style="padding:2px; border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Jewellery/" . $row['Item_IMAGE'];} ?>"><br><?php {echo "{$row['Item_NAME']}";} ?></td></a> <?php
  $counter = 1;
  }
else if ($counter % 10 == 1)
  {
  ?> <td style="padding:10px; teXt-align:center;"><a href="JewelleryDetails.php?Item=<?php echo "{$row['Item_ID']}"; ?>"><img style="padding:2px; border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Jewellery/" . $row['Item_IMAGE'];} ?>"><br><?php {echo "{$row['Item_NAME']}";} ?></td></a> <?php
  $counter = 10;
  }
else
  {
  ?> <td style="padding:10px; teXt-align:center;"><a href="JewelleryDetails.php?Item=<?php echo "{$row['Item_ID']}"; ?>"><img style="padding:2px; border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Jewellery/" . $row['Item_IMAGE'];} ?>"><br><?php {echo "{$row['Item_NAME']}";} ?></td></a> <?php
  $counter = 2;
  }
$last=$row['Item_ID'];
$check = $check+1;
}
?> 




<div id="pageControl">

<?php
if ($page == 0)
{}
else
{?><a href="Jewellery.php?Price=Lowest to highest&Zodiac=All&Search=&page=<?php echo $page-1 ?>&items=<?php echo $items-9 ?>">Previous</a> &nbsp; <?php ;}

if ($last == $endofarray)
{}
else
{?> <a href="Jewellery.php?Price=Lowest to highest&Zodiac=All&Search=&page=<?php echo $page+1 ?>&items=<?php echo $total+1 ?>">Next</a> <?php ;}
?>
</div>



<?php
    mysql_close($conn);
    ?>


</table>
</div>
</div>
<body>

<?php include "footer.php"; ?>
</body>

</html>
