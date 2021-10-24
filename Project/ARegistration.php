
    <!-- session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ALogout.php");
	} -->


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
	<h1>Register form for Admin</h1>

	    <form action="ARegistrationAction.php" method="post">
		Enter your Name: <input type="text" name="firstname">
		<br>
		<br>
		Gender: 
		<input type="radio" name="gender" checked="checked" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other
		<br>
		<br>
		<lable>Date of Birth:</lable>
        <input type="date" name="dob">
        <br><br>

        <lable>Religion:</lable>
        <select name="Religion">
			<option value="islam">Islam</option>
			<option value="christianity">Christianity</option>
			<option value="hinduism">Hinduism</option>
			<option value="buddhism">Buddhism</option>
		</select>
		<br><br>

	<h2>Contact Information</h2>

	    <label for="PresentAddress">PresentAddress:</label>
	    <textarea name="PresentAddress"></textarea>
	    <br><br>

	    <label for="PermanentAddress">PermanentAddress:</label>
	    <textarea name="PermanentAddress"></textarea>
	    <br><br>

	    <label for="Phone">Phone:</label>
	    <input type="tel" id="phone" name="phone">
	    <br><br>


	   <lable>Enter your email:</lable>
       <input type="email" name="email">
       <br><br>


       <h2>Account Information</h2>

       Username: <input type="text" name="username">
       <br><br>

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>


       <input type="submit" name="submit">
       </form>
       Registered? <a href="ALogin.php">Click here</a> for login.
</body>
</html>