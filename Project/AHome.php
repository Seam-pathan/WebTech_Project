<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ALogout.php");
	}
?>

<?php
   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
	<h1>Home Page</h1>
	<p>Welcome, Admin <?php echo $_SESSION['uname']; ?></p>

	<a href="AProfile.php">Profile</a>
	<br><br>

	<a href="AUserManagment.php">User Managment</a>
	<br><br>

	<a href="ALogout.php">Logout</a>

</body>
</html>