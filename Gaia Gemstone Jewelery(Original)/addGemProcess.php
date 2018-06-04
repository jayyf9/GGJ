<!-- Add gemstone script -->
<link rel="stylesheet" type="text/css" href="css/unibookStyle.css" />
<html>

<?php
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
 $dbname = 'GGJewellery';
 mysql_select_db($dbname);

$Name = $_POST['Name'];
$Desc = $_POST['Desc'];
$Zodiac = $_POST['Zodiac'];


$sql="INSERT INTO Gemstones (Gem_Name, Gem_Desc, Gem_Zodiac)
VALUES('$Name', '$Desc', '$Zodiac')";
 
$result = mysql_query($sql) or die(mysql_error());

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }

?>
<head>
<title>Gaia Gemstone Jewellery</title>
<?php include "header.php"; ?>
</head>

<body>
<table>
<div id="container">

<?php
// SOURCE : w3schools.com, 2011
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  }


/* By using the global PHP $_FILES array you can upload files from a client computer to the remote server.

The first parameter is the form's input name and the second index can be either "name", "type", "size", "tmp_name" or "error". Like this:

$_FILES["file"]["name"] - the name of the uploaded file
$_FILES["file"]["type"] - the type of the uploaded file
$_FILES["file"]["size"] - the size in bytes of the uploaded file
$_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
$_FILES["file"]["error"] - the error code resulting from the file upload
*/
?>



<?php
// In this script we add some restrictions to the file upload. The user may upload .gif, .jpeg, and .png files; and the file size must be under 30 kB:

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1500000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br />";


// The examples above create a temporary copy of the uploaded files in the PHP temp folder on the server.  This is set in PHP.ini and on a windows machine defaults to c:\windows\temp
// The temporary copied files disappears when the script ends. To store the uploaded file we need to copy it to a different location:

    if (file_exists("Gemstones/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "Gemstones/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "Gemstones/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }




echo "Record added:
Name =  
Desc = 
Star Sign = ";





?>



</div>
<?php
mysql_close($conn);
?>
</body>
<?php include "footer.php"; ?>
</html>