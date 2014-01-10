<?php
include 'db.php';
echo 'in here';
//Insert a new idea from the form in the index page
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username = $_POST['username'];
$email = $_POST['email'];

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$sql1 = "SELECT * FROM users WHERE username = '$username'";

if (mysqli_query($mysql_link,$sql1)) {
	include 'idea_list.php';
} else {
$sql2 = "INSERT INTO users (username, email, created_at)
VALUES ('$username', '$email', NOW())";

if (!mysqli_query($mysql_link,$sql2))
  {
die('Error: ' . mysqli_error($mysql_link));
  }
include 'idea_list.php';
}
?>