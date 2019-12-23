<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
		<style type="text/css">
		.header{
			background-color: 333;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input_group">
			<label>Username</label> 
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input_group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input_group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input_group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
		Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

</body>
</html>
