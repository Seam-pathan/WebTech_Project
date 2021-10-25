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
	<h1>Profile</h1>

	<?php
	$arr1;
	$data = file_get_contents("AdminData.json");
	$handle2 = json_decode($data);
	foreach ($handle2 as $json){
		if($json->username === $_SESSION['uname'])
		{
		  $arr1=$json;
		  break;
		}
		
	}
	?> 

	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Religion</th>
				<th>Present Address</th>
				<th>Permanent Address</th>
				<th>Phone</th>
			</tr>
			<tbody>
				<?php
						echo "<tr>";
						    echo "<td>".$arr1->firstname."</td>";
							echo "<td>".$arr1->gender."</td>";
							echo "<td>".$arr1->dob."</td>";
							echo "<td>".$arr1->Religion."</td>";
							echo "<td>".$arr1->PresentAddress."</td>";
							echo "<td>".$arr1->PermanentAddress."</td>";
							echo "<td>".$arr1->phone."</td>";
						echo "</tr>";
				?>
			</tbody>
		</thead>
	</table>
	<br><br>


    <a href="AUpdateProfile.php">Update Profile</a>
	<a href="ADeleteProfile.php">Delete Profile</a>
	<br><br>
	<a href="AChangePassword.php">Change Password</a>
	<br><br>
    <a href="AHome.php">Back</a>
    <br><br>


</body>
</html>