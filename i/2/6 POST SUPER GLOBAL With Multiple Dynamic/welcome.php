<?php
$email = $_POST['email'];
$password = $_POST['password'];

?>

<html>
<body>
<form>
Receive Email :<br>
<input type="email" name="re-email" value="<?php echo $email ?>"> 
<br>

Receive Password :<br>
<input type="password" name="re-password" value="<?php echo $password ?>"> 
<br>
</form>
</body>
</html>