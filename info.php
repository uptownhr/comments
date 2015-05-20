<?php
$host = "mysql";
$username = "root";
$pw = "asdf";
$db = "Comments";

$connect = new mysqli($host,$username, $pw, $db);

if ($connect->connect_error)
{
 die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfullY";


$test = "INSERT INTO User (email,password) VALUES ('example2@gmail.com','sd1234')";

if(mysqli_query($connect, $test))
{
 echo "Completed";
}
else
{
 echo "Opps";
 mysqli_error($connect);
}
mysqli_close($connect);

?>

