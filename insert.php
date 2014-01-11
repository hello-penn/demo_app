
<?php
include 'db.php';
//Insert a new idea from the form in the index page
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//$username = $email = $ideaname = $description = NULL;
  if (isset($_POST["ideaname"]) && isset($_POST["description"])) {
   $idea = test_input($_POST["ideaname"]);
   $description = test_input($_POST["description"]);

   $sql = "INSERT INTO ideas (user_id, name, description, category_id, created_at)
VALUES (1, '$idea', '$description', 1, NOW())";

if (!mysqli_query($mysql_link,$sql))
  {
die('Error: ' . mysqli_error($mysql_link));
  }
  header ('Location: #idea_list');
}
?>