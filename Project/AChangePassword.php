<?php
   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Password</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
   <h1>Change Password</h1>

    <form action="AChangePasswordAction.php" method="post">

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>

	   <lable for="pwd">New Password:</lable>
       <input type="password"id="pwd2" name="pwd2">
       <br><br>
	   
	   <lable for="pwd">Confirm Password:</lable>
       <input type="password"id="pwd3" name="pwd3">
       <br><br>

       <input type="submit" name="submit" value="submit">
       <br><br>
       <a href="AProfile.php">Back</a>
       <br><br>

    </form>
    <br>
</body>
</html>