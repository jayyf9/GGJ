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

<script type="text/javascript">

  function validate()
{
  formfilled=document.EditAccForm
  password=formfilled.password.value


  if (password.length ==4) 
  {
  document.getElementById("PasswordCheck").style.display=""
  return false
  } //Checks that the password field is populated with more than 4 characters


</script>



<div id="container">
<body>
<div id="detailForm">
<form name="EditAccForm" action="accountupdate.php" method="post">
<table>
<tr><td><h2> <?php echo "Edit " . $_SESSION['User_Name'] . "'s account details"; ?></h2></td></tr>
</br>
<tr><td>Forename:</td><td><input name="Forename" value="<?php echo $_SESSION['User_Forename']; ?>"></td></tr>
</br>
<tr><td>Surname:</td><td><input name="Surname" value="<?php echo $_SESSION['User_Surname']; ?>"> </td></tr>
</br>
<tr><td>Email:</td><td><input name="Email" value="<?php echo $_SESSION['User_Email']; ?>"></td></tr>
</br>
<tr><td>Date of birth:</td><td><input name="DOB" type="date" value="<?php echo $_SESSION['User_DOB']; ?>"></td></tr>
</br>
<tr><td>Current Password:</td><td><input id="password" name="password" type="password"><div="PasswordCheck" style="color:red; display:none;">*Password incorrect*</div></td></tr>
</br>
<tr><td>New Password:</td><td><input name="Newpassword" type="password"> </td></tr>
</br>
<tr><td>Retype Password:</td><td><input type="password"> </td></tr>
</br>
<tr><td><a href="#">View purchase history</a></td></tr>
</br>
<tr><td><a href="account.php"><input Value="Back to details" type="button"></a><input Value="Save Changes" type="Submit"></td></tr>
</table>
</form>
</div>
<?php//pressing this will remove the read only messages from the inputs allowing edits

    mysql_close($conn);
?>
</div>
<?php include "footer.php"; ?>

  </body>
</html>
