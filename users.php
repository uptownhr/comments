<?php
require('db.php');

$sql = "SELECT email FROM User";
$result = $connect->query($sql);


if($result->num_rows > 0)
{
 while($row = $result->fetch_assoc())
 {
  echo "email: " . $row["email"] . "<br>";
 }
}
else
echo "Nothing in table"; 

?>

