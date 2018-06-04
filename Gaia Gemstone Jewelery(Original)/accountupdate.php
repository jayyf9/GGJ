<html>
<body>

<!-- This script updates the information the user added on the account.php page -->
 
<?php
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
 $dbname = 'GGJewellery';
 mysql_select_db($dbname);

   session_start();

$ID= $_SESSION['User_ID'];
$Forename = $_POST['Forename'];
$Surname = $_POST['Surname'];
$Email = $_POST['Email'];
$DOB = $_POST['DOB'];
$Password = $_POST['password'];

$sql="UPDATE Users SET User_Forename='$Forename', User_Surname='$Surname', User_DOB='$DOB', User_Password='$Password' WHERE User_ID=$ID";
 
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo "Account Updated:<br>
Forename=$Forename<br>
Surname=$Surname<br>
Date of Birth=$DOB";

  $_SESSION['User_Forename'] = $Forename; 
  $_SESSION['User_Surname'] = $Surname;  
  $_SESSION['User_Email'] = $Email; 
  $_SESSION['User_DOB'] = $DOB;

mysql_close($conn);
header ('Location: account.php');
?>
</body>
</html>