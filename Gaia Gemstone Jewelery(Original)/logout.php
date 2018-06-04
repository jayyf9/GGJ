<?php
// first connect to session
session_start();

$_SESSION['User_loggedin'] = false; 
$_SESSION['User_Forename'] = ""; 
$_SESSION['User_Surname'] = ""; 
$_SESSION['User_Email'] = ""; 
$_SESSION['User_DOB'] = "";
$_SESSION['User_Accesslevel'] = "";
$_SESSION['cart'] = "";

// destroy session cookie for this user
session_destroy(); 

//re-direct to logonfail page
header('Location:  index.php');  
exit();  

?>