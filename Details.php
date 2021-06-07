<?php
include 'connect_db.php';
$id =$_GET['sid'];
$sql = "SELECT * FROM service where s_id = ".$id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Product Detail</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/detail.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="5.jpg">
			</div>
			<ul>
				<li><a href="Home.html">Home</a></li>
				<li><a href="About.html">About</a></li>	
				<li><a href="ContactUs.html">Contact Us</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>
    </header>
<section>
	<div class="container">
		<div class="form">
			<h1 class="product-name"><?php echo $row['servicename']?></h1>
			<p class="category">Category:- <?php echo $row['category'];?></p>
			<p class="sub-category">Sub-category:- <?php echo $row['subcategory']; ?></p>
			<p class="product-details"><?php echo $row["aboutProject"]?></p>
			<h3 class="product-price">Rs.<?php echo $row["budget"]; ?></h3>
			<button type="button" class="btn-save">save sevice  <span><i class="fa fa-bookmark"></i></span></button>
			<button type="button" class="btn-send"><a href=<?php echo "'/website/reqq.php?id=".$row['s_id']."'"; ?>>  send request </a> <span><i class="fa fa-envelope-o"></i></span></button>
		</div>
		<div class="sub-container">
			<div class="img">
				
			</div>
		</div>
	</div>





</section>
</body>
</html>