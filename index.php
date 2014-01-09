<html>
<head>
	<title>Page Title</title>
</head>
<body>

<?php

include 'db.php';
// define variables and set to empty values
$username = $email = $ideaname = $description = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $username = test_input($_POST['username']);
   $email = test_input($_POST['email']);
   $idea = test_input($_POST["ideaname"]);
   $description = test_input($_POST["description"]);
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   User Name: <input type="text" name="username">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Idea Name: <input type="text" name="ideaname">
   <br><br>
   Description: <textarea name="description" rows="5" cols="40"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
