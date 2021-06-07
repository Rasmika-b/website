<?php
include 'connect_db.php';
session_start();
$uname = $_SESSION['user'];


?>	



<!DOCTYPE html>
<html>
<head>
	<title>Explore</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/explore.css">
</head>
<body>
	 <header>
		<div class="main">
			<div class="logo">
				<img src="5.jpg">
			</div>
			<ul>
				<li><a href="Home.html">Home</a></li>
				<li class="active"><a href="Explore.html">Explore</a></li>	
				<li><a href="About.html">About</a></li>	
				<li><a href="ContactUs.html">Contact Us</a></li>
			</ul>
		</div>
    </header>
<section>
	<div class="products">
		<div class="container">
			<h1 class="lg-title">Here are the Sevices you are waiting for!</h1>
			<p class="text-light">How to create a product card grid using HTML and CSS? This video shows you how to make a responsive product card or design using a mobile-first approach.</p>

			<div class="product-items">
				<!--single product-->
				<div class="product">
					<div class="product-content">
						<div class="product-img">
							<img src="cover.jpg" alt="product image">
						</div>
						<div class="product-btns">
							<button type="button" class="btn-save">save sevice
							<span><i class="fa fa-bookmark"></i></span></button>
							<button type="button" class="btn-know">know more
							<span><i class="fa fa-info-circle"></i></span></button>
						</div>
					</div>
					<div class="product-info">
						<div class="product-info-top">
							<h2>Writing & Translation</h2>
						</div>
				        <h3 class="product-name">Writing exceptional cover letters</h3>
				        <p class="product-price">Rs. 1500</p> 
				        <button type="button" class="btn-send">send request
							<span><i class="fa fa-envelope-o"></i></span></button>
					</div>
					<div class="off-intro">
						<h2 class="sm-title"></h2>
					</div>
				</div>
				<!--end of single product-->
				<!--single product-->
				<div class="product">
					<div class="product-content">
						<div class="product-img">
							<img src="buss.jpg" alt="product image">
						</div>
						<div class="product-btns">
							<button type="button" class="btn-save">save sevice
							<span><i class="fa fa-bookmark"></i></span></button>
							<button type="button" class="btn-know">know more
							<span><i class="fa fa-info-circle"></i></span></button>
						</div>
					</div>
					<div class="product-info">
						<div class="product-info-top">
							<h2>Business</h2>
						</div>
				        <h3 class="product-name">Career Counseling expert</h3>
				        <p class="product-price">Rs. 3000</p> 
				        <button type="button" class="btn-send">send request
							<span><i class="fa fa-envelope-o"></i></span></button>
					</div>
					<div class="off-intro">
						<h2 class="sm-title"></h2>
					</div>
				</div>
				<!--end of single product-->

				<!--single product-->
				<div class="product">
					<div class="product-content">
						<div class="product-img">
							<img src="prog.jpg" alt="product image">
						</div>
						<div class="product-btns">
							<button type="button" class="btn-save">save sevice
							<span><i class="fa fa-bookmark"></i></span></button>
							<button type="button" class="btn-know">know more
							<span><i class="fa fa-info-circle"></i></span></button>
						</div>
					</div>
					<div class="product-info">
						<div class="product-info-top">
							<h2>Programming & Tech</h2>
						</div>
				        <h3 class="product-name">Dresigning website (Frontend)</h3>
				        <p class="product-price">Rs. 5500</p> 
				        <button type="button" class="btn-send">send request
							<span><i class="fa fa-envelope-o"></i></span></button>
					</div>
					<div class="off-intro">
						<h2 class="sm-title"></h2>
					</div>
				</div>
				<!--end of single product-->

				<!--single product-->
				<div class="product">
					<div class="product-content">
						<div class="product-img">
							<img src="pod.jpg" alt="product image">
						</div>
						<div class="product-btns">
							<button type="button" class="btn-save">save sevice
							<span><i class="fa fa-bookmark"></i></span></button>
							<button type="button" class="btn-know">know more
							<span><i class="fa fa-info-circle"></i></span></button>
						</div>
					</div>
					<div class="product-info">
						<div class="product-info-top">
							<h2>Music & Audio</h2>
						</div>
				        <h3 class="product-name">Editing different Podcasts </h3>
				        <p class="product-price">Rs. 3000</p> 
				        <button type="button" class="btn-send">send request
							<span><i class="fa fa-envelope-o"></i></span></button>
					</div>
					<div class="off-intro">
						<h2 class="sm-title"></h2>
					</div>
				</div>
				<!--end of single product-->

				<!--single product-->
				<div class="product">
					<div class="product-content">
						<div class="product-img">
							<img src="ecom.jpg" alt="product image">
						</div>
						<div class="product-btns">
							<button type="button" class="btn-save">save sevice
							<span><i class="fa fa-bookmark"></i></span></button>
							<button type="button" class="btn-know">know more
							<span><i class="fa fa-info-circle"></i></span></button>
						</div>
					</div>
					<div class="product-info">
						<div class="product-info-top">
							<h2>Digital Technology</h2>
						</div>
				        <h3 class="product-name">Easy E-Commerce Marketing techniques</h3>
				        <p class="product-price">Rs. 8000</p> 
				        <button type="button" class="btn-send">send request
							<span><i class="fa fa-envelope-o"></i></span></button>
					</div>
					<div class="off-intro">
						<h2 class="sm-title"></h2>
					</div>
				</div>
				<!--end of single product-->
				
				<!--single product-->
				
				<?php
					$sql = "SELECT * FROM service ";
					$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    	
    	echo '<div class="product">
					<div class="product-content">
						<div class="product-img">
							<img src="exp2.jpg" alt="product image">
						</div>
						<div class="product-btns">
							<button type="button" class="btn-save">save sevice
							<span><i class="fa fa-bookmark"></i></span></button>
							<button type="button" class="btn-know"><a href="/website/details.php?sid='.$row['s_id'].'" style="text-decoration: none;">Know More</a>
							<span><i class="fa fa-info-circle"></i></span></button>
						</div>
					</div>
					<div class="product-info">
						<div class="product-info-top">';

		echo '<h2>'.$row['category'].'</h2></div>';
		echo ' <h3 class="product-name">'.$row['servicename'].'</h3>';
		echo '<p class="product-price"> Rs.'.$row['budget'].'</p> ';
		echo '<button type="button" class="btn-send"><a href="/website/details.php?sid='.$row['s_id'].'" style="text-decoration: none;">send request</a>
							<span><i class="fa fa-envelope-o"></i></span></button>
					</div>
					<div class="off-intro">
						<h2 class="sm-title"></h2>
					</div>
				</div>';



  }
} else {
  echo "0 results";
}
$conn->close();
				?>
				<!--end of single product-->
				<!--single product-->
				
				<!--end of single product-->
			</div>
		</div>
	</div>
</section>
</body>
</html>