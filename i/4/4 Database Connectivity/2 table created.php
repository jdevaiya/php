<?php
	$db = new mysqli("localhost","root","","wap");
		if($db -> connect_error)
		{
			echo "Database Is Not Connected";
		}
		else{
			$sql_code = "create table users(
			id int(11) NOT NULL AUTO_INCREMENT,
			full_name VARCHAR(50),
			email VARCHAR(50),
			password VARCHAR(50),
			PRIMARY KEY(id)
			
			)";
			
			 
			if($db -> query($sql_code))
			{
				echo "table created";
			}
			else{
				echo "table not created";
			}
		}
?>