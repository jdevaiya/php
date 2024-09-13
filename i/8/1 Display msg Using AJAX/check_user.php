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
			echo "User Already Exits";
		}
		else{
			echo "User Not Found";
		}
	}	
?>
