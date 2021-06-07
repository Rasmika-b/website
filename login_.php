<?php

include 'connect_db.php';

$uname = $_POST['text'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM users WHERE uname='$uname'";

  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if($row["pwd"] == $pwd)
  {
  	session_start();
    $_SESSION['user'] = $uname;
  	header( "refresh:1;url=/website/Home.html" );
  }
  else {
  	header( "refresh:0;url=/website/Login.php?error=1" );
  }
$conn->close();


?>