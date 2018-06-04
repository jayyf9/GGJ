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

$query = "SELECT * FROM Gemstones WHERE Gem_ID = $ID";
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
    ?>
    <h2>Gemstone: <?php {echo "{$row['Gem_Name']}";} ?></h2></br>

<body>
     <a class="fancybox" href="<?php echo "Gemstones/" . $row['Gem_Image']; ?>" data-fancybox-group="gallery" title="<?php {echo "{$row['Gem_Name']}";} ?>"><img style="padding:4px; border:1px solid #021a40; position:absolute; width:300px; height:300px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>"></a>
        <div id="itemControl" style="margin-left:350px;">
            <?php
            if ($row['Gem_Zodiac'] != "N/A")
            {echo "<b>Zoiac Sign:</b> </br>" . $row['Gem_Zodiac'] . "</br>";}
            else
            {} 
		echo "<b>Description:</b> </br>" . $row['Gem_Desc']; ?>
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
