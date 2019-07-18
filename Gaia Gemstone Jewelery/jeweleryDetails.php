<html>        
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaia Gemstone Jewelery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <?php include "header.php"; ?>
</head>

<?php
$ID = $_GET['Item'];

$query = "SELECT * FROM items WHERE Item_ID = $ID";
$resultSet = mysqli_query($conn, $query);



$quantity = 1;       
?>
<div id="container">
<table>
    <!-- this is how you interate a resultset from MYSQL as a associative array -->
    <?php
    $counter=2; 
    
    while($row = mysqli_fetch_array($resultSet))
    {
$price = $value = isset($row['Item_Price']) ? $row['Item_Price'] : '';
    ?>
    <h2><?php {echo "{$row['Item_NAME']}";} ?></h2></br>

<body>
        <table>
          <tr>
            <td>
     <a class="fancybox" href="<?php echo 'Jewelery/' . $row['Item_IMAGE']; ?>" title="<?php {echo "{$row['Item_NAME']}";} ?>"><img style="border:1px solid #021a40; position:relative; width:300px; height:300px;" src="<?php {echo "Jewelery/" . $row['Item_IMAGE'];} ?>"></a>
                </td>
            <td style="padding: 15px;">
              <?php echo "<b>Description:</b> </br>" . $row['Item_Desc']; ?>
                <br><br>
              <?php
        if (!isset($row['Gem_Zodiac']))
        {}
        else
        {echo "<b>Zodiac Sign:</b> </br>" . $row['Gem_Zodiac'] . "</br>";}   
        ?>
            
    
        <div id="itemControl">

        <?php
        $GEMID= isset($row['Item_GEMID']);
        $query2 = "SELECT * FROM gemstones WHERE Gem_ID = $GEMID";
        $resultSet2 = mysqli_query($conn, $query2);
        while($row2 = mysqli_fetch_array($resultSet2))
        {
        echo "This Item is made from " . $row2['Gem_Name'] ?><br>
        <a href="gemDetails.php?Item=<?php echo $row['Item_GEMID'] ?>"><img style="border:1px solid #021a40;width:50px; height:50px;" src="<?php echo "Gemstones/" . $row2['Gem_Image']; ?>"></a>   
        <br>
        <?php  }  ?>
        <a href="GemDetails.php?Item=<?php echo $row['Item_GEMID'] ?>"></a>
        </br>
        <?php echo "Price: £" . "$price"; ?>
        </div>
            </td>
        </tr>
    
    </table>
        </br>
    	
</body>

   <?php
    }
    mysqli_close($conn);
    ?>
  </table>

</div>
    <?php include "footer.php"; ?>
</html>
