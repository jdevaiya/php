<?php
	$username = $_POST['email'];
	$db = new mysqli("localhost","root","","wap");
	if($db -> connect_error)
	{
		echo "Database Not Connected";
	}
	else{
		$check_user = "SELECT email FROM users WHERE email = '$username'";
		$response = $db -> query($check_user);
		if($response -> num_rows != 0)
		{
			echo "<i class='fa fa-times-circle' style='color:red'></i>";
		}
		else{
			echo "<i class='fa fa-check' style='color:blue'></i>";
		}
	}	
?>
