<?php
	$db = new mysqli("localhost","root","");
		if($db -> connect_error)
		{
			echo "Database Is Not Connected";
		}
		else{
			$sql_code = "drop database adse";
			if($db -> query($sql_code))
			{
				echo "Database deleted";
			}
			else{
				echo "Database not deleted";
			}
		}
?>