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
  <div class="wrapper">
<?php

if(isset($_GET['id'])) 
{
$Item_ID = $_GET['id'];//the product id from the URL 
$action = $_GET['action'];//the action from the URL 
} 
else
{
$action = "nothing";
}



// standard PHP to MySQL database select script
// standard PHP to MySQL database select script
$dbhost = '160.153.146.154';
$dbuser = 'GGJewellery';
$dbpass = 'Phenom955!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
mysql_select_db($dbname);


?> 
<div id="container">


<?php

if(empty($_SESSION['User_loggedin']))
{ 
header ('Location: logon.php');
}
else
{

switch($action) { //decide what to do 
case "add":
   if(!isset($_SESSION['cart'][$Item_ID]))
   {
  $_SESSION['cart'][$Item_ID]=0;
    }
  $_SESSION['cart'][$Item_ID]++;
  break;

    case "remove":
        $_SESSION['cart'][$Item_ID]--; //remove one from the quantity of the product with id $product_id 
        if($_SESSION['cart'][$Item_ID] == 0) unset($_SESSION['cart'][$Item_ID]); //if the quantity is zero, remove it completely (using the 'unset' function) - otherwise is will show zero, then -1, -2 etc when the user keeps removing items. 
    break;

    case "empty":
        unset($_SESSION['cart'][$Item_ID]); //unset the whole cart, i.e. empty the cart. 
    break;
	
	case "nothing":
    break;
}




if(empty($_SESSION['cart']))
{ 
echo "<br><h3 style='text-align:center;''>You have no items in your shopping cart.</h3>";
}
else
{


    echo "<table border=\"1\" padding=\"3\" width=\"80%\">"; //format the cart using a HTML table
			echo "<th> </th>";
            echo "<th> Item Name</th>";
			echo "<th> Quantity</th>";
			echo "<th> Total</th>";
			
    //iterate through the cart, the $Item_ID is the key and $quantity is the value
    foreach($_SESSION['cart'] as $Item_ID => $quantity) { 

        //get the name, description and price from the database - this will depend on your database implementation.
        //use sprintf to make sure that $Item_ID is inserted into the query as a number - to prevent SQL injection
    $query = "SELECT * FROM Items WHERE Item_ID = $Item_ID";
    $resultSet = mysql_query($query);
        $row = mysql_fetch_array($resultSet, MYSQL_ASSOC);


        //Only display the row if there is a product (though there should always be as we have already checked)
        if(mysql_num_rows($resultSet) > 0) {

            list($ID, $description, $price) = mysql_fetch_row($resultSet);
            $total=0;
            $line_cost = $row['Item_Price'] * $quantity; //work out the line cost
            $total = $total + $line_cost; //add to the total cost


            echo "<tr>";
            //show this information in table cells
            echo "<td align=\"center\"><a href='Jewellery.php'><img style='width:60px; height:70px;' src='Jewellery/" . $row['Item_IMAGE']."'></img></a></td>";
            echo "<td align=\"center\">" . $row['Item_NAME'] . "</td>";
            //along with a 'remove' link next to the quantity - which links to this page, but with an action of remove, and the id of the current product
            echo "<td align=\"center\">$quantity <a href=\"$_SERVER[PHP_SELF]?action=remove&id=$Item_ID\">X</a></td>";
            echo "<td align=\"center\"> £" .$line_cost . "</td>";
            echo "</tr>";
        }

  }

    //show the total
    echo "<tr>";
    echo "<td colspan=\"3\" align=\"right\">Total</td>";
    echo "<td align=\"right\">£$total +£5 P&P </td>";
    echo "</tr>";

    //show the empty cart link - which links to this page, but with an action of empty. A simple bit of javascript in the onlick event of the link asks the user for confirmation
    echo "<tr>";
    echo "<td colspan=\"4\" align=\"right\"><a href=\"$_SERVER[PHP_SELF]?action=empty\" onclick=\"return confirm('Are you sure?');\">Empty Cart</a></td>";
    echo "</tr>"; 
    echo "</table>";

?>

<br>
<form style="float:right; margin-right:60px;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="j4k3_08@hotmail.co.uk">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

<?php

    }
        }
?>

<body>

<?php

mysql_close($conn);
?>
 <div class="push"></div>
</div>
</div>
<?php include "footer.php"; ?>

  </body>
</html>
