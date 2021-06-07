<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	 <header>
		<div class="main">
			<div class="logo">
				<img src="5.jpg">
			</div>
			<ul>
				<li><a href="Explore.php">Explore</a></li>
				<li><a href="index.html">Home</a></li>
				<li><a href="About.html">About</a></li>	
				<li><a href="ContactUs.html">Contact Us</a></li>
			</ul>
		</div>
    </header>
<section>
	<div class="container">
		<div class="title">Sign Up</div>
		<form action="/website/reg.php" method="POST">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" name="fullname" placeholder="Enter your name" required>
				</div>
				<div class="input-box">
					<span class="details">Username</span>
					<input type="text" name="uname" placeholder="Enter your username" required>
				</div>
				<div class="input-box">
					<span class="details">Email</span>
					<input type="text" name="mail" placeholder="Enter your mail-id" required>
				</div>
				<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="number" name="mobile" placeholder="Enter your number" required>
				</div>
				<div class="input-box">
					<span class="details">Password</span>
					<input type="password" name="pwd" id='pwd1' placeholder="Enter your password" required>
				</div>
				<div class="input-box">
					<span class="details">Confirm Password</span>
					<input type="password" name="check" id='pwd2' placeholder="Confirm Password" required>
				</div>
			</div>
			<div class="gender-details">
				<input type="radio" name="gender" id="dot-1" value="male">
				<input type="radio" name="gender" id="dot-2" value="Female">
				<input type="radio" name="gender" id="dot-3" value="NA">
				<span class="gender-title">Gender</span>
				<div class="category">
					<label for="dot-1">
						<span class="dot one"></span>
						<span class="gender">Male</span>
					</label>
					<label for="dot-2">
						<span class="dot two"></span>
						<span class="gender">Female</span>
					</label>
					<label for="dot-3">
						<span class="dot three"></span>
						<span class="gender">Prefer not to say</span>
					</label>
				</div>
			</div>
			<div class="button">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
</section>
</body>
<script type="text/javascript">
	function abc() {
		document.getElementById('pwd1').style.borderColor='red';
		document.getElementById('pwd2').style.borderColor='red';
		//document.getElementsById('pwd')[1].style.borderColor='red';
	}
</script>

</html>

<?php
if($_GET['error']==1)
	echo "<script>abc()</script>";
?>