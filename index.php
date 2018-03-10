<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	
	

	<form method="post" action="login.php">
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="usuario">
			<small id="emailHelp" class="form-text text-muted">Email de teste = admin@admin.com</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha">
			<small class="form-text text-muted">Senha de teste = admin</small>
		</div>
		<?php 
		if(isset($_GET['msg'])) {
		echo "<div class='alert alert-danger' role='alert'>Senha errada!</div>";
	}
	?>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>