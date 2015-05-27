<?php
session_start();
$logged_in = false;
$email = false;

if( !empty($_SESSION['user']) ){
  $logged_in = true;
  $email = $_SESSION['email'];
  $user = $_SESSION['user'];
}

if($_SESSION['user'] > 0){
	echo "<html>";
	echo "<body>";
	echo "<nav>";
	echo "<ul>";
        echo "<li><a href='/login.php'>Login</a></li>";
	echo "<li><a href='/registration.php'>Registration</a></li>";
	echo "<li><a href='/logout.php'>Logout</a></li>";
	echo "</ul>";
	echo "</nav>";
	echo "<section>";
	echo "<p>User is  <b>$user</b></p>";
	echo "<p>Email is <b>$email</b></p>";
	echo "</section>";
	echo " </body>";
	echo "</html>";
}
else{
 	echo "<html>";
 	echo "<body>";
 	echo "<nav>";
 	echo "<ul>";
 	echo "<li><a href='/login.php'>Login</a></li>";   
 	echo "<li><a href='/registration.php'>Registration</a></li>";
 	echo "</ul>";
 	echo "</nav>";
        echo " </body>";
        echo "</html>";

   	echo "<b>Please login in.</b>";
}
?>
