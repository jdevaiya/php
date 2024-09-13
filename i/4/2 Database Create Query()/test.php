<?php
	$db = new mysqli("localhost","root","");
		if($db -> connect_error)
		{
			echo "Database Is Not Connected";
		}
		else{
			$sql_code = "create database adse";
			if($db -> query($sql_code))
			{
				echo "Database created";
			}
			else{
				echo "Database not created";
			}
		}
?>
