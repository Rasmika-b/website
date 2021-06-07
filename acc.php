<?php
include 'connect_db.php';

$id = $_GET['id'];
$sql = "update postrequest set isAccepted=1 where pid=$id";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();


?>