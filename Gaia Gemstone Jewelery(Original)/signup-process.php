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

$Forename = $_POST['User_Forename'];
$Surname = $_POST['User_Surname'];
$Email = $_POST['User_Email'];
$DOB = $_POST['User_DOB'];
$Username = $_POST['User_Name'];
$Password = $_POST['User_Password'];

$query = "INSERT INTO Users (User_Forename, User_Surname, User_Email, User_DOB, User_Accesslevel, User_Name, User_Password) VALUES ('$Forename','$Surname','$Email','$DOB', '1','$Username','$Password')";
$resultSet = mysql_query($query);
?>
<body>
<div id="container">

Your account has been created, please wait to be redirected or click <a href="logon.php"> here </a> to do so now.

<?php
    mysql_close($conn);
?>
</div>
<?php include "footer.php"; ?>

  </body>
</html>