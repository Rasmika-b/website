


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <header>
		<div class="main">
			<div class="logo">
				<img src="5.jpg">
			</div>
			<ul>
				<li><a href="Explore.html">Explore</a></li>
				<li><a href="index.html">Home</a></li>
				<li><a href="About.html">About</a></li>	
				<li><a href="ContactUs.html">Contact Us</a></li>
			</ul>
		</div>
    </header>
<section>
	<div class="container">
		<div class="form">
				
				<h2>Login</h2>

				<form action="/website/login_.php" method="POST">
				<label>
					<span>Username</span>
					<input type="text" name="text">
				</label>
				<label>
					<span>Password</span>
					<input type="password" name="password" >
					<div id='error' style="color: red"></div>
				</label>
				<button class="submit" type="submit">Login</button>		

			</form>
			<p class="forgot-pass">Forgot Password ?</p>
		</div>
		<div class="sub-container">
			<div class="img">
				<div class="img-text">
					<h3>New here ?</h3>
					<p>Discover great amount of new oppurtunities !!</p>
				</div>
				<a href="SignUp.php" style="text-decoration: none;"><button class="img-btn" type="button">Sign Up</button></a>
			</div>
		</div>
	</div>
</section>
</body>
<script type="text/javascript">
	function abc() {
		document.getElementsByTagName("input")[0].style.borderColor="red";
		document.getElementsByTagName("input")[1].style.borderColor="red";
		console.log(document.getElementsByTagName("input")[1].style.color);

	}
</script>
</html>

<?php

if($_GET['error']==1	)
echo "<script>abc();</script>";
?>
