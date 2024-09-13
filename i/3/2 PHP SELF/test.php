<html>
<body>
<form action="test.php" method="POST">

<input type="email" name="email">
<input type="submit">

</form>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$x = $_POST['email'];
	echo $x;
	echo $_SERVER['PHP_SELF'];
}
?>