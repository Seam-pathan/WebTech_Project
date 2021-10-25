<?php
   if($_SERVER['REQUEST_METHOD'] == "GET" and count($_GET)>0)
   {
      setcookie("bgcolor", $_GET['color']);
   }

   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Login</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
<?php require('AHeader.php')  ?>
   <h1>Admin</h1>

    <form action="ALoginAction.php" method="post">

       Username: <input type="text" name="username">
       <br><br>

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>

       <input type="submit" name="submit" value="Login">
       <br>

    </form>
    <br>


    <a href="AForgotPass.php">Forgot Password</a>
    <br><br>

    Not registered yet? <a href="ARegistration.php">Click here</a> for registration.
    <br><br>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GRT">
        Select Page Color: 
         <select name="color" id="color">
         <option value="white" selected>white</optionWhite</option>
         <option value="#cbeca4">Light Green</option>
         <option value="#a2c9e8">Light Blue</option>
         </select>

         <input type="submit" name="submit" value="change color">
    </form>
    <a href="Welcome.php">Back</a>
    <br><br>
    <?php require('AFooter.php'); ?>
</body>
</html>