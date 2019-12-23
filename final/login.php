<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.header{
			background-color: 333;
		}
	</style>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input_group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
	
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input_group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
		Not yet a member? <a href="register.php">Sign up</a>
	</p>
	</form>

</body>
</html>
