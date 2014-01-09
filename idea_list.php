<?php include 'db.php';?>
<!-- displays a list of current ideas -->
<html>
<head>
	<title>Idea list</title>
</head>
<body>

<?php
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($mysql_link,"show tables;");

while($row = mysqli_fetch_array($result))
  {
  echo $row[0];
  echo "<br>";
  }

?>

</body>
</html>
