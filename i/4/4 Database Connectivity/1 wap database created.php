<?php
	$db = new mysqli("localhost","root","");
	if($db -> connect_error)
	{
		echo "error";
	}
	else{
		$sql_code = "create database wap";
		if($db -> query($sql_code))
		{
			echo "database created";
		}
		else{
			echo "database not created";
		}
	}
?>