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
$dbhost = '188.121.44.162';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);


$Item_ID = 4;


if($_SESSION['cart']) { //if the cart isn't empty
//show the cart

    echo "<table border=\"1\" padding=\"3\" width=\"40%\">"; //format the cart using a HTML table

    //iterate through the cart, the $Item_ID is the key and $quantity is the value
    foreach($_SESSION['cart'] as $Item_ID => $quantity) { 

        //get the name, description and price from the database - this will depend on your database implementation.
        //use sprintf to make sure that $Item_ID is inserted into the query as a number - to prevent SQL injection
        $query = "SELECT * FROM Items WHERE id = $Item_ID";
		$resultSet = mysql_query($query);
   

        //Only display the row if there is a product (though there should always be as we have already checked)
        if(mysql_num_rows($result) > 0) {

            list($name, $description, $price) = mysql_fetch_row($result);

            $line_cost = $price * $quantity; //work out the line cost
            $total = $total + $line_cost; //add to the total cost

            echo "<tr>";
            //show this information in table cells
            echo "<td align=\"center\">$name</td>";
            //along with a 'remove' link next to the quantity - which links to this page, but with an action of remove, and the id of the current product
            echo "<td align=\"center\">$quantity <a href=\"$_SERVER[PHP_SELF]?action=remove&id=$Item_ID\">X</a></td>";
            echo "<td align=\"center\">$line_cost</td>";

            echo "</tr>";

        }

    }

    //show the total
    echo "<tr>";
    echo "<td colspan=\"2\" align=\"right\">Total</td>";
    echo "<td align=\"right\">$total</td>";
    echo "</tr>";

    //show the empty cart link - which links to this page, but with an action of empty. A simple bit of javascript in the onlick event of the link asks the user for confirmation
    echo "<tr>";
    echo "<td colspan=\"3\" align=\"right\"><a href=\"$_SERVER[PHP_SELF]?action=empty\" onclick=\"return confirm('Are you sure?');\">Empty Cart</a></td>";
    echo "</tr>"; 
    echo "</table>";



}else{
//otherwise tell the user they have no items in their cart
    echo "You have no items in your shopping cart.";

} 
?>









?>
<body>
<div id="container">

<?php

    mysql_close($conn);
?>
</div>
<?php include "footer.php"; ?>

  </body>
</html>