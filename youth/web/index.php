<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PRCS User Login</title>
	<link href="css/style.css" rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Multi Column Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>
	<script src="js/skycons.js"></script>
</head>
<body>
<h1 style="color:#252525;">PRCS Visitor Login</h1>
<img src="../img/prcs.png" style="position: absolute; margin: -100px 0px 0px 100px;"/>
<div class="main-agileits">
	<div class="sign-in-wthree">
		<div class="sign-in-top-agileinfo">
			<h2>Sign In</h2>
			<p>Your info is safe here</p>
		</div>
		<div class="sign-in-bottom-agileinfo">
			<form action="" method="POST">
				<h3>Email Address</h3>
				<input type="text" name="email" required=" ">
				<h3>Password</h3>
				<input type="password" name="pass" required=" ">
				<input type="submit" name="login" value="Sign In"/>
				<p>New Visitor </p><a href="../user_register.php">Click Here</a>
			</form>
		</div>
	</div>
</div>
<div class="footer-agileits-w3layouts">
	<p class="agileinfo"> &copy; 2016. All Rights Reserved | Design by <a href=#">PRCS</a></p>
</div>
</body>
</html>
<?php
$conn = mysqli_connect('localhost', 'root', '1234','prcs_reg');
if (!$conn){
	die('Could not connect: ' . mysqli_error());
}
if(isset($_POST['login'])) {
	$user_email = htmlspecialchars(addslashes($_POST['email']));
	$user_pass = htmlspecialchars(addslashes($_POST['pass']));
	$check_user = "select * from record WHERE email='$user_email' AND pswd='$user_pass'";
	$run = mysqli_query($conn, $check_user);
	if (mysqli_num_rows($run)) {
		$_SESSION['email'] = $user_email;
		$_SESSION['pass'] = $user_pass;
		echo "<script>window.open('../edit_user.php','_self')</script>";
	} else {
		echo "<script>alert('Error login details or Admin not yet approved your account.')</script>";
	}
}
?>