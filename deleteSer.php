<?php
include 'connect_db.php';
$sid = $_GET['sid'];
$sql ="DELETE from service where s_id = ".$sid;
if ($conn->query($sql) === TRUE) {
 # echo "Record deleted successfully";
	header( "refresh:0;url=/website/Manage_post.php" );
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>