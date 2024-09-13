<?php
 $db = new mysqli("localhost","root","","app");
 if($db -> connect_error)
 {
	 echo "Database Not Connceted";
 }
 else{
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$check_user = "SELECT username FROM user WHERE username = '$email'";
			$response = $db -> query($check_user); 
			
			if($response -> num_rows == 0)
			{
				$store_user = "INSERT INTO user(full_name,username,password) VALUES('$fullname','$email','$password')";
				if($db -> query($store_user))
				{
					echo "Signup Success !";
				}
				else{
					echo "Signup Failds !";
				}
			}
		}
	} 
?>