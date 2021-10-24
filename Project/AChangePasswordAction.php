<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
            //   $username = $_POST['username'];
		      $pwd = $_POST['pwd'];
              $pwd2 = $_POST['pwd2'];
              $pwd3 = $_POST['pwd3'];


        $isValid = false;


        $data = file_get_contents("AdminData.json");
		    $handle2 = json_decode($data);
        foreach ($handle2 as $json){
            if($pwd === $json->pwd)
            {
              $json->pwd = $pwd2;
              echo "matched";
	            $isValid = true;
	            break;
            }
        }

      $encode = json_encode($handle2);
      file_put_contents('AdminData.json',$encode);
        if ($isValid)
        {
    	    header("Location: AProfile.php");
        }
        else
        {
    	    echo "failed...";
        }
    }
?>