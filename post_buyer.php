<?php

include 'connect_db.php';
session_start();

$uname = $_SESSION['user'];
$aboutProject = $_POST['aboutProject'];
$slct1 =$_POST['slct1'];
$slct2 = $_POST['slct2'];
$slct3 = $_POST['slct3'];
$budget = $_POST['budget'];

$sql = "INSERT INTO postrequest (uname,about,category,subcategory,budget,time,isAccepted) values ('$uname','$aboutProject','$slct1','$slct2','$budget','$slct3',0)";
if ($conn->query($sql) === TRUE) {
  header( "refresh:0;url=/website/Manage.php" );
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>