<?php
include 'connect_db.php';
$pid = $_GET['pid'];


$sql ="DELETE FROM postrequest where pid =" .$pid ;
if ($conn->query($sql) === TRUE) {
   header( "refresh:0;url=/website/Manage.php" );
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>