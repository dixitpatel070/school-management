<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<title>Login Form</title>
</head>
<body background="images/classroom.jpg" class="body_deg">
	

	<center>
		<div class="form_deg">

			<center class="title_deg">
				Login Form

				<h4>
					<?php
					error_reporting(0);
					session_start();
					session_destroy();
					echo $_SESSION['loginMessage'];

					?>
				</h4>
			</center>
			<form action="login_check.php" method="POST" class="login_form">
				<div>
					<label class="label_deg">Username</label>
					<input type="text" name="username">
				</div>

				<div>
					<label class="label_deg">Password</label>
					<input type="Password" name="password">
				</div>

				<div>
					
					<input class="btn btn-primary" type="submit" name="submit" value="Login">
				</div>
			</form>
		</div>
	</center>
</body>
</html>