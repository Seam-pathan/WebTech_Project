<?php
   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
	<h1>Welcome to our daily newspaper</h1>

    <a href="ALogin.php">Click here</a> for Admin Login.
    <br><br>

    <a href="Registration.php">Click here</a> for Editor Login.
    <br><br>

    <a href="Registration.php">Click here</a> for REPORTER Login.
    <br><br>

    <a href="Registration.php">Click here</a> for User Login.
    <br><br>
</body>
</html>