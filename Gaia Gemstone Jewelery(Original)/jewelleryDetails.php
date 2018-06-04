<html>

<head>
<title>Gaia Gemstone Jewellery</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

    <!-- Add jQuery library -->
    <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

    
            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>



<?php include "header.php"; ?>
<script>
function Quantityless()
{<?php $quantity+1 ?>}
function Quantitymore()
{<?php $quantity+1 ?>}
</script>
</head>



<?php
// standard PHP to MySQL database select script
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);

$ID = $_GET['Item'];

$query = "SELECT * FROM Items WHERE Item_ID = $ID";
$resultSet = mysql_query($query);



$quantity = 1;       
?>
<div id="container">
<table>
    <!-- this is how you interate a resultset from MYSQL as a associative array -->
    <?php
    $counter=2; 
    
    while($row = mysql_fetch_array($resultSet, MYSQL_ASSOC))
    {
$price = $value = isset($row['Item_Price']) ? $row['Item_Price'] : '';
    ?>
    <h2><?php {echo "{$row['Item_NAME']}";} ?></h2></br>

<body>
     <a class="fancybox" href="<?php echo 'Jewellery/' . $row['Item_IMAGE']; ?>" data-fancybox-group="gallery" title="<?php {echo "{$row['Item_NAME']}";} ?>"><img style="height:2000px;padding:4px; border:1px solid #021a40; position:absolute; width:300px; height:300px;" src="<?php {echo "Jewellery/" . $row['Item_IMAGE'];} ?>"></a>
        <div id="itemControl" style="margin-left:350px;">

        <?php
        $GEMID= $row['Item_GEMID'];
        $query2 = "SELECT * FROM Gemstones WHERE Gem_ID = $GEMID";
        $resultSet2 = mysql_query($query2);
        while($row2 = mysql_fetch_array($resultSet2, MYSQL_ASSOC))
        {
        echo "This Item uses the gemstone " . $row2['Gem_Name'] ?><br>
        <a href="GemDetails.php?Item=<?php echo $row['Item_GEMID'] ?>"><img style="width:50px; height:50px;" src="<?php echo "Gemstones/" . $row2['Gem_Image']; ?>"></a>   
        <br>
        <?php
        }
        ?>

        <a href="GemDetails.php?Item=<?php echo $row['Item_GEMID'] ?>"></a>
        </br>
        Quantity: <select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        </select>
	<!--	<input type="button" onclick="Quantityless()" value="-">
		<input type="text" id="quantity" name="quantity" value="<?php echo $quantity ?>" style="width:40px;"> 
		<input type="button" onclick="Quantitymore()" value="+"> -->
		</br>
        </br>
		<a href="Basket.php?id=<?php echo $ID; ?>&action=add&name=<?php echo $row['Item_NAME'] ?>">Add to basket</a>
        </br>
        </br>
        <?php echo "Price: £" . "$price"; ?>
        </br>
        </br>
        <?php {echo "{$row['Item_Desc']}";} 
        
?>
        </br>
    </select>
		</div>
    
</body>

   <?php
    }
    mysql_close($conn);
    ?>
  </table>

</div>
    <?php include "footer.php"; ?>
</html>
