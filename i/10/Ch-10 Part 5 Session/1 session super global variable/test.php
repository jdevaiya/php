<body>
	<form method="post" action="welcome.php">
		<button type="submit">submit</button>
	</form>
	
	<?php
		session_start();
		$_SESSION['username'] = "wap@1234";
	?>
</body>

