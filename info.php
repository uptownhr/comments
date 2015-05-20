<?php
$servername = "mysql";
$username = "root";
$password = "asdf";
$dbname = "comments";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error)
{
die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO User (email, password)
VALUES ('ronny@processing.com.','mypassword')";

mysqli_query($connect, $sql);

$connect->close();
?>

