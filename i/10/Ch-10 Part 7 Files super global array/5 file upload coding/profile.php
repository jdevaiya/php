<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
<script src="https://cdn.usebootstrap.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.usebootstrap.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body style="background:#FCD0CF">
	<form enctype="multipart/form-data">
		<input type="file" name="data" accept="image/*" />
		<input type="submit" />
	</form>
	
	
<script>
	$(document).ready(function(){
		$("form").submit(function(e){
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "php/upload.php",
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache: false,
				success: function(response){
					alert(response);
				}
			});
		});
	});
</script>
<script src="bootstrap.bundle.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>