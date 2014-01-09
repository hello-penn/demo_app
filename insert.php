
<?php
//Insert a new idea from the form in the index page
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($mysql_link,"INSERT INTO idea (user_id, name, description, Category_id)
VALUES (0, $ideaname, $description, 0)");
?>
