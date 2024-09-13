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
		var username = btoa($("#username").val());
		$.ajax({
			type : "POST",
			url : "result.php?",
			data : {
				email : username
				},
			success : function(response){
			$("p").html(response);
			}			
		});
	});
});
</script> 
</body>
</html>