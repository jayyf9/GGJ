<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<html>
<body>
<div id="Loggedin">
<?php
session_start();


if(empty($_SESSION['User_loggedin']))
{ 
echo '<a href="logon.php" style="float:right;">Sign In/Sign Up</a>';
}
else
{
echo '<a href="logout.php" style="float:right; padding-left:15px; padding-right:20px;">Logout</a>';
echo '<a href="account.php" style="float:right; padding-left:15px;">Logged in as<br> ' . $_SESSION['User_Name']. '</a>';
}
?>

<a href="basket.php"><img src="cart.png" style="width:30px; height:25px;" /></a>&nbsp;&nbsp;
</div>

<?php

if (!empty($_SESSION['User_loggedin']) && ($_SESSION['User_Accesslevel'] == 2))
	{
	?>
	<div id="Nav">
	<a href="addItem.php">Add an Item</a>
	</br>
	<a href="addGem.php">Add a Gemstone</a>
	</br>
	<a href="editItem.php">Edit Items</a>
	</br>
	<a href="editGem.php">Edit Gemstones</a>
	</br>
	<a href="pesigns.php">Designs</a>
	</br>
	<a href="purchases.php">Purchases</a>
	</div>
	<?php 
	}
else
	{

	}
?>


<div id="header"><img style="width:100px;" src="logo.png" /><br>
<h2>Gaia Gemstone Jewelery</h2>
<br>
<div id="menu">
<a href="index.php?page=0&items=1"><img style="width:100px;" src="home.png" /></a>&nbsp;&nbsp;
<a href="jewellery.php?Price=Lowest to highest&Zodiac=All&Search=&page=0&items=1&number=0"><img style="width:100px;" src="Jewellery.png" /></a>&nbsp;&nbsp;
<a href="designyourown.php"><img style="width:170px;" src="DesignYourOwn.png" /></a>&nbsp;&nbsp;
<a href="gemstones.php?page=0&items=1&Zodiac=All&Search="><img style="width:120px;" src="Gemstones.png" /></a>&nbsp;&nbsp;
<a href="contactus.php"><img style="width:120px;" src="contactus.png" /></a>
</div>
<br>
</div>
</body>
</html>