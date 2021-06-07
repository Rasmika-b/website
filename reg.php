<?php
include 'connect_db.php';

$fname = $_POST["fullname"];
$uname = $_POST["uname"];

$mail =  $_POST["mail"]; 
$mobile = $_POST["mobile"];
$gender =  $_POST["gender"];



$check = $_POST["check"];
$pwd = $_POST["pwd"];



if($check == $pwd){
$sql = "INSERT INTO users (fname,uname,pwd,email,mobile,gender) values ('$fname','$uname','$pwd','$mail','$mobile','$gender')";

if ($conn->query($sql) === TRUE) {
  echo "You are Registered!, Now Login(you will be redirected soon!)";
  header( "refresh:3;url=/website/Login.html" );
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}

else  {
	header( "refresh:0;url=/website/SignUp.php?error=1" );
}


?>