<?php

//$user="root";
//$password="asdf";
//$database="Comments";

//mysql_connect(localhost,$user,$password);
//@mysql_select_db($database) or die( "Unable to select database");

$host = "mysql";
$username = "root";
$pw = "asdf";
$db = "Comments";

$connect = new mysqli($host,$username, $pw, $db);

global $connect;

if ($connect->connect_error)
{
 die("Connection failed: " . $connect->connect_error);
}
?>
