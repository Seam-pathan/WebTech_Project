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
	<title>Form Example</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
	<h1>Update Information</h1>

	    <form action="AUpdateProfileAction.php" method="post">
		Enter your Name: <input type="text" name="firstname2">
		<br><br>
		
		Gender: 
		<input type="radio" name="gender2" checked="checked" value="male">Male
		<input type="radio" name="gender2" value="female">Female
		<input type="radio" name="gender2" value="other">Other
		<br>
		<br>
		<lable>Date of Birth:</lable>
        <input type="date" name="dob2">
        <br><br>

        <lable>Religion:</lable>
        <select name="Religion2">
			<option value="islam">Islam</option>
			<option value="christianity">Christianity</option>
			<option value="hinduism">Hinduism</option>
			<option value="buddhism">Buddhism</option>
		</select>
		<br><br>

	    <label for="PresentAddress">PresentAddress:</label>
	    <textarea name="PresentAddress2"></textarea>
	    <br><br>

	    <label for="PermanentAddress">PermanentAddress:</label>
	    <textarea name="PermanentAddress2"></textarea>
	    <br><br>

	    <label for="Phone">Phone:</label>
	    <input type="tel" id="phone" name="phone2">
	    <br><br>

	   <lable>Enter your email:</lable>
       <input type="email" name="email2">
       <br><br>

       Username: <input type="text" name="username2">
       <br><br>

       <input type="submit" name="submit" value="update">
       </form>
	   <br><br>
       <a href="AProfile.php">Back</a>
</body>
</html>