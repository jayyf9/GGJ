<!-- This is the script for adding new Jewellery Items -->
<link rel="stylesheet" type="text/css" href="css/unibookStyle.css" />
<html>


<?php
$Image = $_FILES["file"]["name"];

$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
 $dbname = 'GGJewellery';
 mysql_select_db($dbname);

$Name = $_POST['Name'];
$Price = $_POST['Price'];
$Desc = $_POST['Desc'];
$Type = $_POST['Type'];
$Quantity = $_POST['Quantity'];
$Size = $_POST['Size'];


$sql="INSERT INTO Items (Item_GEMID, Item_NAME, Item_Price, Item_Desc, Item_IMAGE, Item_Type, Item_Quantity)
VALUES('1', '$Name', '$Price', '$Desc', '$Image', '$Type', '$Quantity')";
 


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
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

// The examples above create a temporary copy of the uploaded files in the PHP temp folder on the server.  This is set in PHP.ini and on a windows machine defaults to c:\windows\temp
// The temporary copied files disappears when the script ends. To store the uploaded file we need to copy it to a different location:

    if (file_exists("Jewellery/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "Jewellery/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "Jewellery/" . $_FILES["file"]["name"];
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
