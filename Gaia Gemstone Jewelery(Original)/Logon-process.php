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

  session_start();


$Username = $_SESSION['User_Name'];
$Password = $_SESSION['User_Password']; 


$query = "SELECT * FROM Users WHERE User_Name = '$Username' && User_Password = '$Password'";
$resultSet = mysql_query($query);
$row = mysql_fetch_array($resultSet, MYSQL_ASSOC);


// get details from database store in script level variables
  $loggedin=true;
  $ID=$row['User_ID'];
  $Forename=$row['User_Forename'];
  $Surname=$row['User_Surname'];
  $Email=$row['User_Email'];
  $DOB=$row['User_DOB'];
  $Accesslevel=$row['User_Accesslevel'];

  // store the values in session variables
  $_SESSION['User_loggedin'] = $loggedin; 
  $_SESSION['User_ID'] = $ID; 
  $_SESSION['User_Forename'] = $Forename; 
  $_SESSION['User_Surname'] = $Surname; 
  $_SESSION['User_Email'] = $Email; 
  $_SESSION['User_DOB'] = $DOB;
  $_SESSION['User_Accesslevel'] = $Accesslevel;
  $_SESSION['cart'];
header ('Location: index.php');
?>

<body>
<div id="container">
<?php mysql_close($conn); ?>
</div>
<?php include "footer.php"; ?>

</body>
</html>