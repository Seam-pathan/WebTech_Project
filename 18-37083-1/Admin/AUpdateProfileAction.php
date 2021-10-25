<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ALogout.php");
	}
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
            $firstname2 = $_POST['firstname2'];
            $gender2 = $_POST['gender2'];
            $dob2 = $_POST['dob2'];
            $Religion2 = $_POST['Religion2'];
            $PresentAddress2 = $_POST['PresentAddress2'];
            $PermanentAddress2 = $_POST['PermanentAddress2'];
            $phone2 = $_POST['phone2'];
            $email2 = $_POST['email2'];
            $username2 = $_POST['username2'];

        $isValid = false;

        // $data = file_get_contents("AdminData.json");
		// $handle2 = json_decode($data);
        // // for($i=0; $i < count($handle2); $i++) {
        //     // echo $handle2[$i]->firstname;
        // // }
        // $handle3=[];
        // echo $handle2;
        // foreach ($handle2 as $json)
        // {
        //     if($json->username === $_SESSION['username'])
        //     {
        //     $json->firstname = $firstname2;
        //     $json->gender = $gender2;
        //     $json->dob = $dob2;
        //     $json->Religion = $Religion2;
        //     $json->PresentAddress = $PresentAddress2;
        //     $json->PermanentAddress = $PermanentAddress2;
        //     $json->phone = $phone2;
        //     $json->email = $email2;
        //     $json->username = $username2;
	    //     $isValid = true;
        //     }
        //     array_push($handle3,$json);
        // }
        // $encode = json_encode($handle3);


        $data = file_get_contents("AdminData.json");
		    $handle2 = json_decode($data);
            $handle3=[];
        foreach ($handle2 as $json){
            echo $json;
            // if($_SESSION['username'] === $json->username)
            // {
            // //   $json->pwd = $pwd2;
            //   echo "matched";
	        // //     $isValid = true;
	        // //     break;
            // }
        }

      $encode = json_encode($handle2);
      file_put_contents('AdminData.json',$encode);
    //   file_put_contents('AdminData.json',$encode);
        if ($isValid)
        {
    	    header("Location: AProfile.php");
        }
        else
        {
    	    echo "failed...";
        }
        echo $_SESSION['uname'];
    }
?>