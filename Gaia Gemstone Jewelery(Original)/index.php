<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  
    <title>Gaia Gemstone Jewellery</title>
      
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

    <link rel="icon" type="image/png" href="myicon.png">

    <link rel="stylesheet" href="css/demo.css">
    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    <?php include "header.php"; ?>
  </head>
  <body>
<?php
// standard PHP to MySQL database select script
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);

$counter = 0;
$counter2 = 0;
$order = 0;

$query = "SELECT Item_NAME, Item_ID FROM Items order by Item_ID";
$resultSet = mysql_query($query);

$query2 = "SELECT Item_IMAGE FROM Items order by Item_ID";
$resultSet2 = mysql_query($query2);

$query3 = "SELECT Item_NAME FROM Items order by Item_Date desc";
$resultSet3 = mysql_query($query3);

$query4 = "SELECT Item_IMAGE FROM Items order by Item_Date desc";
$resultSet4 = mysql_query($query4);
?>


  
    <div id="container">
      <h2>Discover our range of hand crafted Jewellery</h2>

      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="img/banner01.jpg" title="Orbicular Jasper and agatised coral necklace"></li>
          <li><img src="img/banner02.jpg" title="Picture jasper earrings"></li>
          <li><img src="img/banner03.jpg" title="Orbicular Jasper and agatised coral bracelet"></li>
        </ul>
        <!-- end Basic jQuery Slider -->
      </div>
      <!-- End outer wrapper -->

      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 420,
            width       : 782,
            responsive  : true
          });

        });
      </script>

      <h2>Most popular items</h2>

<div id="indexTiles">
<table>
<tr>
<?php while($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))
    {
    if(!($counter < 3)){
        break;
    }
else
{ ?><td style="padding:10px; teXt-align:center;"><a href="JewelleryDetails.php?Item=<?php echo "{$row['Item_ID']}"; ?> "><?php echo $row['Item_NAME'] ?></a></td><?php }
?>

<?php
 $counter = $counter + 1;
}
?>
</tr>

<tr>
<?php while($row2 = mysql_fetch_array($resultSet2, MYSQL_ASSOC))
    {
    if(!($counter2 < 3)){
        break;
    }
else
{ ?><td style="padding:10px; teXt-align:center;"><a href="JewelleryDetails.php?Item=<?php echo "{$row['Item_ID']}"; ?> "><img style="width:250px; height:250px; padding:2px; border:1px solid #021a40;" src="<?php {echo "Jewellery/" . $row2['Item_IMAGE'];} ?>"></a></td><?php } ?>
<?php
 $counter2 = $counter2 + 1;
}  ?>
</tr>

</table>

    <h2>Recently added items</h2>
<?php 
$counter = 0;
$counter2 = 0;
 ?>
<table>
<tr>
<?php while($row3 = mysql_fetch_array($resultSet3, MYSQL_ASSOC))
    {
    if(!($counter < 3)){
        break;
    }
else
{ ?><td style="teXt-align:center;"><a href="JewelleryDetails.php?Item=<?php echo "{$row['Item_ID']}"; ?> "><?php echo $row3['Item_NAME'] ?></a></td><?php }
?>

<?php
 $counter = $counter + 1;
}
?>
</tr>

<tr>
<?php while($row4 = mysql_fetch_array($resultSet4, MYSQL_ASSOC))
    {
    if(!($counter2 < 3)){
        break;
    }
else
{ ?><td><a href="JewelleryDetails.php?Item=<?php echo "{$row['Item_ID']}"; ?> "><img style="width:250px; height:250px; padding:2px; border:1px solid #021a40;" src="<?php {echo "Jewellery/" . $row4['Item_IMAGE'];} ?>"></a></td><?php } ?>
<?php
 $counter2 = $counter2 + 1;
}  ?>
</tr>

</table>



  </div>
    <?php
    mysql_close($conn);
    ?>
</div>
<?php include "footer.php"; ?>
</body>
</html>
