<?php
// establish connection
$con=mysqli_connect("188.121.44.162","GGJewellery","Phenom955!");

// select database
mysql_select_db("GGJewellery",$con);
// query datbase
$result = mysql_query("SELECT * FROM item",$con); 
// loop through result set
while($row = mysql_fetch_array($result))
{
// print a field from the row
// the row is held in an array
echo $row[Item_NAME];
}
// close connection
mysql_close($con);
?>