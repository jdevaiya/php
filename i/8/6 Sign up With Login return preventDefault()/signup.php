<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery.js"></script>
</head>
<body>
	<form>
		<fieldset>
		<legend>Sign up</legend>
		FULL NAME:<br>
		<input type="text" name="fullname" required="required" id="fullname">
		<br><br>
		
		EMAIL :<br>
		<input type="email" name="email" id="email" required="required">	
		<span id="message"></span>
		<br><br>
		
		PASSWORD : <br>
		<input type="password" name="password" required="required" id="password">	
		<br><br>
		
		<input type="submit" value="Signup now" id="submit" disabled>
		</fieldset>
	</form>
<script>
$(document).ready(function (){
	$("#email").on("change",function (){
		$.ajax({
			type : "POST",
			url : "check_user.php",
			data : {
				email : $(this).val()
			},
			success : function (response)
			{
				if(response.trim() == "user already exist")
				{
					$("#message").html("<i class='fa fa-times-circle' style='color:red'></i>");
					$("#submit").attr("disabled","disabled");
				}
				else{
					$("#message").html("<i class='fa fa-check' style='color:blue'></i>");
					$("#submit").removeAttr("disabled");
				}
			}
		});
	});
	
	$("form").submit(function(e){
		e.preventDefault();
		$.ajax({
			type : "POST",
			url : "register.php",
			data : {
				fullname : $("#fullname").val(),
				password : $("#password").val(),
				email : $("#email").val(),
			},
			success : function(response)
			{
				window.alert(response);
			}
		});
	});
});
</script>
</body>
</html>