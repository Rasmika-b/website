<?php
include 'connect_db.php';
session_start();
$uname = $_SESSION['user'];
$id = $_GET['id'];

$sql = "SELECT * FROM service where s_id=".$id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$budget = $row['budget'];
$category = $row['category'];
$aboutProject = $row['aboutProject'];
$time = $row['time'];
$subcategory=$row['subcategory'];


$sql2 = "INSERT INTO postrequest (uname,about,category,subcategory,budget,time,isAccepted) values ('$uname','$aboutProject','$category','$subcategory','$budget','$time',0)";


	if ($conn->query($sql2) === TRUE) {
   header( "refresh:0;url=/website/Manage.php" );
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close(); 

?>