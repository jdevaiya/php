<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
	<input type="email" id="username">
	<button>Check User</button>
	<p></p>

<script>
$(document).ready(function(){
	$("button").click(function(){
		var username = $("#username").val();
		$.ajax({
			type : "GET",
			url : "result.php?email="+username,
			success : function(response){
			$("p").html(response);
			}			
		});
	});
});
</script> 
</body>
</html>