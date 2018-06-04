<link rel="stylesheet" type="text/css" href="css/unibookStyle.css" />
<html>

<head>
<title>Gaia Gemstone Jewellery</title>
<?php include "header.php"; ?>
</head>

<body>
<div id="container">
<form action="ContactusEmail.php" method="post" enctype="text/plain">
<table>
<h2>Contact Us</h2>
<h3>Contact us by email:</h3>
<tr><td>Title</td>
<td><select>
<option>Mr</option>
<option>Miss</option>
<option>Mrs</option>
</select></td>
<tr><td>Name</td>
<td><input type="text" name="name"></td></tr>
<tr><td>Email</td>
<td><input></td></tr>
<tr><td>Telephone(optional)</td>
<td><input></td></tr>
<tr><td>Subject</td>
<td><input></td></tr>
<tr><td>Your Message</td>
<td><textarea rows="4" cols="30" name="Other" id="Other" ></textarea></td></tr>
</table>
<button type="submit">Submit</button><input type="reset" value="Reset">
</form>


</div>
</body>
<?php include "footer.php"; ?>
</html>