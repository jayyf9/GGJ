<html>
  <html>        
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gaia Gemstone Jewelery
      </title>
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
  // standard PHP to MySQL database select script
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
  $dbname = 'ggjewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
  mysqli_select_db($conn, $dbname);
$ID = $_GET['Item'];
$query = "SELECT * FROM Gemstones WHERE Gem_Id = $ID";
$resultSet = mysqli_query($conn, $query);
$quantity = 1;       
?>
    <body>
      <div id="container">
        <table>
          <!-- this is how you interate a resultset from MYSQL as a associative array -->
          <?php
$counter=2; 
while($row = mysqli_fetch_array($resultSet))
{
?>
          <h2>Gemstone: 
            <?php {echo "{$row['Gem_Name']}";} ?>
          </h2>
          </br>
    <table>
          <tr>
            <td>
              <a href="<?php echo "Gemstones/" . $row['Gem_Image']; ?>" title="<?php {echo "{$row['Gem_Name']}";} ?>">
                <img style="border: 1px solid #021a40; position:relative; width:300px; height:300px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>">
              </a>
            </td>
            <td style="padding: 15px;">
              <?php echo "<b>Description:</b> </br>" . $row['Gem_Desc']; ?>
                <br><br>
              <?php
        if ($row['Gem_Zodiac'] == NULL)
        {}
        else
        {echo "<b>Zodiac Sign:</b> </br> <img style='width:60px;' src=" . '"' . "Gemstones/" . $row['Gem_Zodiac'] . '"' . "></br>";}   
        ?>
            </td>
          </tr>
    </table>
        </body>
      <?php
}
mysqli_close($conn);
?>
      </table>
    </div>
  <?php include "footer.php"; ?>
</html>
