<html>
<body>
<form action="test.php" method="POST">

<input type="text" name="folder_name">
<input type="submit">

</form>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$folder_name = $_POST['folder_name'];
	if(rmdir("c:/".$folder_name))
	{
		echo "Folder deleted";
	}
	else{
		echo "<style>.xe-warning{display:none;}</style>";
		echo "Folder Not Found Or Some Content Available In Folder";
	}
}
?>