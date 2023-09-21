<?php

session_start();

	if (!isset($_SESSION['username'])) {
		header("location:login.php");
	}
	elseif($_SESSION['usertype']=="admin"){
		header("location:login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="adminstyle.css">

	<?php

		include 'student_css.php';
	
	?>

	<title>Admin dashboard</title>
</head>
<body>
	
	<?php
		include 'student_sidebar.php';
	?>

	

</body>
</html>