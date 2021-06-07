<?php
include 'connect_db.php';
session_start();
$uname = $_SESSION['user'];
$service_name = $_POST['service_name'];
$category = $_POST['slct1'];
$aboutProject= $_POST['aboutProject'];
$subcategory = $_POST['slct2'];
$time = $_POST['slct3'];
$budget = $_POST['budget'];

$sql = "INSERT INTO service (uname,servicename,category,subcategory,aboutProject,time,budget) values ('".$uname."','".$service_name."','".$category."','".$subcategory."','".$aboutProject."','".$time."','".$budget."')";

if ($conn->query($sql) === TRUE) {
  header( "refresh:0;url=/website/Manage_post.php" );
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>