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
	if(mkdir($folder_name))
	{
		echo "Folder Created";
	}
	else{
		echo "Folder Aleady Exist";
	}
}
?>