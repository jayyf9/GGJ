<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    
    <title>Gaia Gemstone Jewellery</title>
    
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
   
    <link rel="stylesheet" href="css/demo.css">
    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    <?php include "header.php"; ?>
  </head>

<?php
// standard PHP to MySQL database select script
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);
    
?>
<div id="container">
<div id="SignupForm">
Already have an account with us? <a href="logon.php"> Click here to Log in</a>
<form name="Forms" action="signup-process.php" method="post">
<table width="300" cellspacing="1" cellpadding="1">
     <tr>
    <td valign="top">First Name </td>
    <td valign="top"><input name="User_Forename"></td>
  </tr>
    <tr>
    <td valign="top">Last Name </td>
    <td valign="top"><input name="User_Surname"></td>
  </tr>
    <tr>
    <td valign="top">Email </td>
    <td valign="top"><input name="User_Email"></td>
  </tr>
  <tr>
    <td width="100" valign="top">Username</td>
    <td width="200" valign="top"><input name="User_Name"></td>
  </tr>
  <tr>
    <td valign="top">Password </td>
    <td valign="top"><input name="User_Password" type="password"></td>
  </tr>
    <tr>
    <td valign="top">Date of Birth </td>
    <td valign="top"><input name="User_DOB" type="date"></td>
  </tr>
  <input name="User_Accesslevel" value="1" type="hidden">
</table>
<br />
<input type="submit" value="Signup" name="signupSubmit">
</form>
</div>
</div>

    <?php
    mysql_close($conn);
    ?>
</div>
<?php include "footer.php"; ?>
</body>
</html>
