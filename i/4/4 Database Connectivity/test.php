<?php
	$db = new mysqli("localhost","root","","wap");
		if($db -> connect_error)
		{
			echo "Database Is Not Connected";
		}
		else{
			If($_SERVER['REQUEST_METHOD'] == "POST")
			{
				$fullname = $_POST['fullname'];
				$email = $_POST['email'];
				$password = $_POST['password'];

				$sql_code = "insert into users(full_name,email,password)
				values('$fullname','$email','$password')";
				if($db -> query($sql_code))
				{
					echo "Sign Up Success";
				}
				else{
					echo "Sign Up Field";
				}
			}
		}
?>

<html>
<body>
	<form method="post" action="test.php">
		<fieldset>
		<legend>Sign up</legend>
		FULL NAME:<br>
		<input type="text" name="fullname">
		<br><br>
		
		EMAIL :<br>
		<input type="email" name="email">	
		<br><br>
		
		PASSWORD : <br>
		<input type="password" name="password">	
		<br><br>
		
		<input type="submit" name="Signup now">			
		</fieldset>
	</form>
</body>
</html>