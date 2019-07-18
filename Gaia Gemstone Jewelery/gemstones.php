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
    
<body>

<div id="container">
<?php
$page = isset($_GET['page']);
$items = isset($_GET['items']);
$Zodiac = isset($_GET['Zodiac']);
$Search = isset($_GET['Search']);
$NoResults = 0;

$query = "SELECT * FROM Gemstones WHERE Gem_Zodiac LIKE '%{$Zodiac}%' AND Gem_Name LIKE '%{$Search}%'"; 
//AND Gem_Zodiac = '$Zodiac'
$resultSet = mysqli_query($conn, $query);
    
    ?>
    <div id="Filter">
       <form action="gemstones.php">
        <table style="width: 80%; float:left;">
        <tr>
          <td>Search:
            <input name="Search" type="text" value="<?php echo $Search; ?>">
            </td>
          <td>Zodiac Sign:
            <select name="Zodiac">
                <option value=""> All 
                </option>
                <option> Capricorn 
                </option>
                <option> Sagittarius 
                </option>
                <option> Libra 
                </option>
                <option> Virgo 
                </option>
                <option> Leo 
                </option>
                <option> Cancer 
                </option>
                <option> Gemini 
                </option>
                <option> Taurus 
                </option>
                <option> Aries 
                </option>
                <option> Pisces 
                </option>
                <option> Aquarius 
                </option>
                <option> Scorpio 
                </option>
              </select>
            </td>
            <td>
            <button type="submit">Update
            </button>
           </td>
        </tr>
        </table>
    </form>
    </div>      
<table>        
<?php        
$counter=2; 
while($row = mysqli_fetch_array($resultSet))
{
?>
    <?php 
if ($counter % 10 == 2)
{
?> 
    <tr>
      <td style="text-align:center; padding:10px;">
        <a href="gemDetails.php?Item=<?php echo "{$row['Gem_ID']}"; ?>"> 
          <img style="border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>">
          <br>
            <h4 style="height:20px;"><?php {echo "{$row['Gem_Name']}";} ?></h4>
        </td>
    </a> 
    <?php
$counter = 1;
$NoResults = 1;

}
else if ($counter % 10 == 1)
{
?> 
    <td style="text-align:center;padding:10px;">
      <a href="gemDetails.php?Item=<?php echo "{$row['Gem_ID']}"; ?>">
        <img style="border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>">
        <br>
        <h4 style="height:20px;"><?php {echo "{$row['Gem_Name']}";} ?></h4>
        </td>
    </a> 
  <?php
$counter = 10;
}
else
{
?> 
  <td style="text-align:center;padding:10px;">
    <a href="gemDetails.php?Item=<?php echo "{$row['Gem_ID']}"; ?>">
      <img style="border:1px solid #021a40; width:250px; height:250px;" src="<?php {echo "Gemstones/" . $row['Gem_Image'];} ?>">
      <br>
        <h4 style="height:20px;"><?php {echo "{$row['Gem_Name']}";} ?></h4>
      </td>
  </a> 

<?php
$counter = 2;
}
    }
?>
<br><br>    
<?php    
if ($NoResults == 0)
{
echo "There are no results, try adjusting your filters.";
}
else
{}
    
    ?>
    
</table>
</div>
</div>


<?php
mysqli_close($conn);
?>
  <?php include "footer.php"; ?>
</body>
</html>
