<!DOCTYPE html>
<html>
<head>
	<title>Look post</title>
</head>
<body>
<?php
$subject="";
$content="";
?>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


		$sql = "SELECT * FROM Canvas_DataBase WHERE id=".$_GET['canvas'];
		$result = $conn->query($sql);

   		if ($result->num_rows > 0) {
   			$row = $result->fetch_assoc();
   			$subject = $row['subject'];
   			$content = $row['content'];

		}else {
		  echo "Nothing to show <br>";
		}


$conn->close();
?>

<?php
echo "<h1>Screen Resolution:</h1>";
echo "Sub: ".$subject."<br>";
echo "content: ".$content."<br>";

?>
</body>
</html>