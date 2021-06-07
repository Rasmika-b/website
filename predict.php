<?php
include 'connect_db.php';
session_start();
$uname = $_SESSION['user'];
$category = $_POST['slct1'];  
$subcategory = $_POST['slct2'];
$projects = $_POST['projects'];
$project_description = $_POST['project_description'];
$experience = $_POST['experience'];
$income = $_POST['income'];

$sql = "INSERT into predict (uname,category,subcategory,project_num,project_description,Experience,income) values ('".$uname."','".$category."','".$subcategory."','".$projects."','".$project_description."','".$experience."','".$income."')";
if ($conn->query($sql) === TRUE) {
	header("url=seller.html");
  echo "<html><script>alert('Average');</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>