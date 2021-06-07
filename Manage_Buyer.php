<?php
include 'connect_db.php';
session_start();
$uname = $_SESSION['user'];
$sql = "SELECT * FROM predict where uname = '".$uname."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$category = $row['category'];
$subcategory = $row['subcategory'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buyer Requests</title>
	<link rel="stylesheet" type="text/css" href="css/manage.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="5.jpg">
			</div>
			<ul>
				<li><a href="Home.html">Home</a></li>
				<li><a href="Explore.php">Explore</a></li>	
				<li><a href="ContactUs.html">Contact Us</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>
    </header>
<section>
	<div class="table-container">
		<h3 class="heading">Buyer Requests</h3>
		<table class="table">
			<tbody>
				
				<?php
				$sql2 = "SELECT * FROM postrequest where category='".$category."' AND subcategory='".$subcategory."'";
				$result = $conn->query($sql2);

if ($result->num_rows > 0) {
  // output data of each row
  while($row1 = $result->fetch_assoc()) {
  
  	echo "<tr>";
  	echo '<td data-label="Post Date">'.date("d/m/Y").'</td>';
  	echo '<td data-label="Category">'.$row1['category'].'</td>';
  	echo '<td data-label="Sub-Category">'.$row1['subcategory'].'</td>';
  	echo '<td data-label="Delivery Time">'.$row1['time'].'</td>';
  	echo '<td data-label="Budget"><span class="text_open">'.$row1['budget'].'</span></td>';
	echo '<td data-label=""><a style="margin-right:16px" href="/website/acc.php?id='.$row1['pid'].'" class="btn">AcceptRequest</a>';
	echo "</tr>";
  }
} else {
  echo "No request as of now";
}
$conn->close();
				?>


			</tbody>
		</table>
	</div>
</section>
</body>
</html>