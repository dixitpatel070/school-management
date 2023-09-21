
<?php

error_reporting(0);
session_start();
session_destroy();

	if ($_SESSION['message']) {
		$message=$_SESSION['message'];

		echo " <script type='text/javascript'>

		alert('$message');

		</script> ";
	}

	$host="localhost";
	$user="root";
	$password="";
	$db="schoolproject";

	$data=mysqli_connect($host,$user,$password,$db);

	$sql="SELECT * FROM teacher";

	$result=mysqli_query($data,$sql);

?>

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
	<title></title>
</head>
<body>
	<nav>
		<label class="logo">D-School</label>

		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#teacher">Teachers</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#admission">Admission</a></li>
			<li><a class="btn btn-success" href="login.php">Login</a></li>
		</ul>
	</nav>

	<div class="section1">
		<label class="img_text">We teach Students with care</label>
		<img class="main_img" src="images/classroom.jpg">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcom_img" src="images/school1.jpg">
			</div>		
			<div class="col-md-8">
				<h1>Welcome To D-school</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
<div id="teacher">
	<center>
		<h1 style="padding-top: 100px;">Our Teacher</h1>
	</center>

	<div  class="container">
		<div class="row">

			<?php
				while($info=$result->fetch_assoc())
				{
			?>
			<div class="col-md-4">
				<img class="teacher" src="<?php echo "{$info['image']}" ?>">

				<div class="overlay">
					<div class="text">
					<h3><?php echo "{$info['name']}" ?></h3>
					<h5><?php echo "{$info['description']}" ?></h5>
				</div>
				</div>
				<!-- <h3><?php echo "{$info['name']}" ?></h3>
				<h5><?php echo "{$info['description']}" ?></h5> -->
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div> 
	<center>
		<h1>Our Courses</h1>
	</center>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="teacher" src="images/web.jpg">
				<h3>Web Development</h3>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="images/graphic.jpg">
				<h3>Graphic Design</h3>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="images/marketing.jpg">
				<h3>Digital Marketing</h3>
			</div>
		</div>
	</div>

	<center id="admission" class="adm">
		<h1>Admission Form</h1>
	</center>

	<div align="center" class="admission_form">
		<form action="data_check.php" method="POST">
			<div class="adm_int">
				<label class="label_text">Name :</label>
				<input class="input_deg" type="text" name="name">
			</div>
			<div class="adm_int">
				<label class="label_text">Email :</label>
				<input class="input_deg" type="text" name="email">
			</div>
			<div class="adm_int">
				<label class="label_text">Phone :</label>
				<input class="input_deg" type="text" name="phone">
			</div>
			<div class="adm_int">
				<label class="label_text">Message :</label>
				<textarea class="input_txt" name="message"></textarea>
			</div>
			<div class="adm_int">
				<input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
			</div>
		</form>
	</div>

	<footer>
		<h3 class="footer_text">All @copyright reserved by dixit patel</h3>
	</footer>
</body>
</html>