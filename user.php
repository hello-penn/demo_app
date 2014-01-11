<?php
include 'db.php';
//Insert a new idea from the form in the index page
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if (isset($_POST["username"]) && isset($_POST["email"])) {
 	$username = $_POST['username'];
	$email = $_POST['email'];
$sql1 = "SELECT * FROM users WHERE username = '$username'";

if (!mysqli_query($mysql_link,$sql1)) {
$sql2 = "INSERT INTO users (username, email, created_at)
VALUES ('$username', '$email', NOW())";

if (!mysqli_query($mysql_link,$sql2))
  {
die('Error: ' . mysqli_error($mysql_link));
  }
  
}
header ('Location: #idea_list');
} else {
$email=NULL;
$username = NULL;}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>