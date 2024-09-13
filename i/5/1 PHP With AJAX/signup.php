<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
	<button>Request PHP Page</button>

<script>
$(document).ready(function(){
	$("button").click(function (){
		$.ajax({
			type : "GET",
			url : "result.php",
			success : function(response){
				window.alert(response);
			}			
		});
	});
});
</script>
</body>
</html>