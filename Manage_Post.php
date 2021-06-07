<?php
include 'connect_db.php';
session_start();
$uname = $_SESSION['user'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Manage Posts</title>
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
		<h3 class="heading">Manage Posts</h3>
		<table class="table">
			<tbody>
				
				<?php
				echo "<tr>";
				$sql = "SELECT * FROM service where uname = '".$uname."'";
				$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 	echo "<tr>";
    echo '<td data-label="Post Date">'.date("d/m/Y").'</td>';
    echo '<td data-label="Service title">'.$row['servicename'].'</td>';
    echo '<td data-label="Category">'.$row['category'].'</td>';
    echo '<td data-label="Sub-Category">'.$row['subcategory'].'</td>';
    echo '<td data-label="Delivery Time">'.$row['time'].'</td>';
    echo '<td data-label="Budget"><span class="text_open">'.$row['budget'].'</span></td>';
    echo '<td data-label=""><a href="/website/deleteSer.php?sid='.$row['s_id'].'" class="btn">Delete</a></td>';
    echo "</tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
				?>
			</tbody>
		</table>
	</div>
</section>
</body>
</html>