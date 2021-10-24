<?php
   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
    	$username = $_POST['username'];
		$pwd = $_POST['pwd'];

        $data = file_get_contents("AdminData.json");
		$handle2 = json_decode($data);
        foreach ($handle2 as $json){
            if($username === $json->username and $pwd === $json->pwd)
            {
	          $isValid = true;
	          break;
            }
            else{
                $isValid = false;
            }
        }

        // $handle = fopen("AdminData.json", "r");
        // $data = fread($handle, filesize("AdminData.json"));
        // $data = explode("\n", $data);

        // $isValid = false;

        // for($i=0; $i < count($data) - 1; $i++)
        // {
    	//    $json = json_decode($data[$i]);
    	//    if($username === $json->username and $pwd === $json->pwd)
        //     {
	    //       $isValid = true;
	    //       break;
        //     }
        // }

        if ($isValid)
        {
            session_start();
            $_SESSION['uname'] = $username;
    	  header("Location: AHome.php?uname=" . $username);
        }
        else
        {
    	  echo "Login failed...";
        }
    }

?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Action</title>
</head>
<body style="background-color: <?php echo $color; ?>;">

    <a href="ALogin.php">Login</a> | <a href="ARegistration.php">Registration</a>

</body>
</html>
