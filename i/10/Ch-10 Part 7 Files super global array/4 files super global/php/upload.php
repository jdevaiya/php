<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		print_r("<pre>");
		print_r($_FILES['data']);
	}
?>