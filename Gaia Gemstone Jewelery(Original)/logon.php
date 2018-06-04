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
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);

?>

<script type="text/javascript">
  jQuery(function() {
  });


  function validate()
{
  formfilled=document.Forms
  User_Name=formfilled.User_Name.value

  if (User_Name.length ==0) 
  {
  document.getElementById("passwordVal").style.display="none"
  document.getElementById("NameVal").style.display=""
  return false
  }

}

</script>


<div id="container">
<div id="LogonForm">


<?php
$_SESSION['User_loggedin'] = false; 

if (empty ($_POST['User_Name']) && empty ($_POST['User_Name']))
        {

        }
else
{
  $Username = $_POST['User_Name'];
  $Password = $_POST['User_Password'];
$query = "SELECT * FROM Users WHERE User_Name = '$Username' && User_Password = '$Password'";
$resultSet = mysql_query($query);
?>
<body>
<div id="container">
<?php 
$row = mysql_fetch_array($resultSet, MYSQL_ASSOC);
if(empty( $row ))
{
     echo "<div style='color:red;'>Username or password not found</div>";
     // Array is empty
}
    else
{
session_start();
$_SESSION['User_Name']   = $Username;
$_SESSION['User_Password']   = $Password;

      echo "Logged in as ", $row['User_Name'];
 header('Location: Logon-process.php');
} 
}

?>
</div>
Dont have an account yet? <a href="signup.php"> Click here to sign up</a>
</br>
<form name="Forms" action="logon.php" method="post">
<table width="300" cellspacing="1" cellpadding="1">
  <tr>
    <td width="100" valign="top">Username</td>
    <td width="200" valign="top"><input name="User_Name"></td>
  </tr>
  <tr>
    <td valign="top">Password </td>
    <td valign="top"><input name="User_Password" type="password"></td>
  </tr>
</table>
<br />
<input type="submit" value="logon" name="logonSubmit">
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
