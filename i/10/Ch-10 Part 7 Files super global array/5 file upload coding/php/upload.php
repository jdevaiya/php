<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$upload_file = $_FILES['data'];
		$location = $upload_file["tmp_name"];
		$name = $upload_file['name'];
		move_uploaded_file($location,"wap/".$name);
		
		echo "connected";
	}
?>