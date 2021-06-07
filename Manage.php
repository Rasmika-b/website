<?php
include 'connect_db.php';
session_start();
$uname = $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Requests</title>
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
				<li><a href="Explore.html">Explore</a></li>	
				<li><a href="ContactUs.html">Contact Us</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>
    </header>
<section>
	<div class="table-container">
		<h3 class="heading">Manage Requests</h3>
		<table class="table">
			<tbody>
				
				
				<?php
				$sql = 'SELECT * FROM postrequest where uname = "'.$uname.'"';
				$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo  $row["uname"]. " " . $row["category"]. " " . $row["budget"]. " ".$row["time"];
	$category = $row['category'];
	$budget = $row['budget'];
	$time = $row['time'];
	$subcategory = $row['subcategory'];
	$date = date("d/m/Y") ;
	$isAccepted = $row['isAccepted'];
	$accept = "Accepted";
	$pid = $row["pid"];
	if($isAccepted == 0)
	{
		$accept = "Pending";
	}   

		echo "<tr>";
		echo '<td data-label="Post Date">'.$date.'</td>';
		echo '<td data-label="Category">'.$category.'</td>';
		echo '<td data-label="Sub-Category">'.$subcategory.'</td>';
		echo '<td data-label="Delivery Time">'.$time.'</td>';
		echo '<td data-label="Budget"><span class="text_open">'.$budget.'</span></td>';
		echo '<td data-label=""><a style="margin-right:16px" href="#" class="btn">'.$accept.'</a><a href="/website/deleete.php?name='.$uname.'&pid='.$pid.'" class="btn">Delete</a></td>';
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
</body>
</html>