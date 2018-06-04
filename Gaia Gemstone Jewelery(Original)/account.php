<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  
    <title>Gaia Gemstone Jewellery</title>
      
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    <?php include "header.php"; ?>
  </head>

<?php
// standard PHP to MySQL database select script
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);
?>

<!-- This section finds the star sign based off the users date of birth -->
<?php
$DOB = $_SESSION['User_DOB'];
$sign = getStarSign(strtotime($DOB));

  function getStarSign($date="")
  {
    $zodiac[356] = "Capricorn";
    $zodiac[326] = "Sagittarius";
    $zodiac[296] = "Scorpio";
    $zodiac[266] = "Libra";
    $zodiac[235] = "Virgo";
    $zodiac[203] = "Leo";
    $zodiac[172] = "Cancer";
    $zodiac[140] = "Gemini";
    $zodiac[111] = "Taurus";
    $zodiac[78]  = "Aries";
    $zodiac[51]  = "Pisces";
    $zodiac[20]  = "Aquarius";
    $zodiac[0]   = "Capricorn";
    if (!$date) $date = time();
    $dayOfTheYear = date("z",$date);
    $isLeapYear = date("L",$date); 
    if ($isLeapYear && ($dayOfTheYear > 59)) $dayOfTheYear = $dayOfTheYear - 1;
    foreach($zodiac as $day => $sign) if ($dayOfTheYear > $day) break;
    return $sign;
    }
?>


<div id="container">
<body onload="getStartSign($date='')>"
<div id="detailForm">
<table width="500" cellspacing="5" cellpadding="1">
<tr><td><h2> <?php echo $_SESSION['User_Name'] . "'s Account details"; ?></h2></td></tr>
</br>
<tr><td class="AccFormLeft">Forename:</td><td class="AccFormRight"><input value="<?php echo $_SESSION['User_Forename']; ?>" readonly></td></tr>
</br>
<tr><td class="AccFormLeft">Surname:</td><td class="AccFormRight"><input value="<?php echo $_SESSION['User_Surname']; ?>" readonly> </td></tr>
</br>
<tr><td class="AccFormLeft">Email:</td><td class="AccFormRight"><input value="<?php echo $_SESSION['User_Email']; ?>" readonly></td></tr>
</br>
<tr><td class="AccFormLeft">Date of birth:</td><td class="AccFormRight"><input type="date" value="<?php echo $_SESSION['User_DOB']; ?>" readonly></td></tr>
</br>
<tr><td class="AccFormLeft">Password:</td><td class="AccFormRight"><input type="password" value="<?php echo $_SESSION['User_Password']; ?>" readonly> </td></tr>
</br>
<tr><td class="AccFormLeft">Your Zodiac sign is:</td><td class="AccFormRight"><?php
echo $sign;
?></td></tr>

<!--<tr><td class="AccFormLeft">Your birthstones are:</td><td class="AccFormRight">-->

<!--</td></tr>-->

</br>

</br>

<tr><td class="AccFormLeft"><a href="UserPurchases.php">View my purchase history</a></td></tr>
</br>
<tr><td class="AccFormLeft"><a href="accountEdit.php"><input Value="Edit" type="Submit"></a></td></tr>
</table>
</div>
</div>
<?php //pressing this will remove the read only messages from the inputs allowing edits

    mysql_close($conn);
?>

<?php include "footer.php"; ?>

  </body>
</html>