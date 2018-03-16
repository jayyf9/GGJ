<html>        
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaia Gemstone Jewelery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">    
    <?php include "header.php"; //include the header code ?>
  </head>
        <!-- Requests data from mysql db using the specific item ID passed in URL  -->
        <?php   
            $ID = $_GET['Item'];
            $query = "SELECT * FROM Items WHERE Item_Id = $ID";     
            $resultSet = mysqli_query($conn, $query);($query);
            $quantity = 1;       
        ?>
    <body>
        <div id="container">
        <table>
            <!-- this while loop iterates through the MYSQL resultset as a associative array -->
            <?php
                $counter=2; 
                while($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC))
                {
                    $price = $value = isset($row['Item_Price']) ? $row['Item_Price'] : '';
            ?>
            <h2>
                <?php 
                    {echo "{$row['Item_Name']}";} 
                ?>
            </h2>
       
        <tr>
          <td>
            <a class="fancybox" href="<?php echo 'Jewelery/' . $row['Item_Image']; ?>" title="<?php {echo "{$row['Item_Name']}";} ?>">
              <img style="position:relative; width:450px; height:450px; border-radius: 10px;" src="<?php {echo "Jewelery/" . $row['Item_Image'];} ?>">
            </a>
          </td>
            <td style="padding: 15px;">
            <?php echo "<b>Description:</b> </br>" . $row['Item_Desc']; //returns the items description ?> 
            <br>
            <br>
       
            <?php
                if ($row['Gem_Zodiac'] == NULL) //requests the zodiac sign      
                    {} //does nothing if it is not available
                else
                    {echo "<b>Zodiac Sign:</b> </br>" . $row['Gem_Zodiac'] . "</br>";}   //returns the zodiac sign of the gemstone used in this item if available
            ?>
            <div id="itemControl">
                <?php
                    $GEMID= $row['Item_GemId']; 
                    $query2 = "SELECT * FROM Gemstones WHERE Gem_ID = $GEMID"; //selects all data for the passed gemID from the gemstones table
                    $resultSet2 = mysqli_query($conn, $query);($query2);
            
                /* The while loop below selects the Gemstone name and stored image that is used within this item and displays/links to it. */
                    while($row2 = mysqli_fetch_array($resultSet2, MYSQLI_ASSOC))
                        {
                            echo "This Item is made from " . $row2['Gem_Name'] ?> 
                            <br/><br/>
                            <a href="gemDetails.php?Item=<?php echo $row['Item_GemId'] ?>">
                                <img style="border:1px solid #021a40;width:100px; height:100px; border-radius: 10px;" src="<?php echo "Gemstones/" . $row2['Gem_Image']; ?>">
                            </a>   
                    <?php       
                        }  
                    ?>     
            <a href="GemDetails.php?Item=<?php echo $row['Item_GemId'] ?>"></a>    
            <br/><br/>
            <?php echo "Price: £" . "$price"; } //return the price of the item ?>
            </div>
            </td>
        </tr>
        </table>
        </div>
        <table>

            <?php
                mysqli_close($conn);  //close the mysql connection
            ?>
        </table>
    </body>
    <br>
    <?php 
        include "footer.php";  //include footer code to bottom of page 
    ?>
</html>
