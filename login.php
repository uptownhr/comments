<?php
session_start();

require('db.php');

$userid = $_SESSION['user'];

if($userid ==  0){
	echo "<form id='login' action='login.php' method='post' accept-charset='UTF-8'>";
 	echo "<fieldset>";
 	echo "<legend>Please Log In: </legend>";
 	echo "<input type='hidden' name='submitted' id='submitted' value='1'/>";
 	echo "<br><b><label for='email' >Email:</label></br></b>";;
 	echo "<input type='text' name= 'email' value='$email' />";
 	echo "<br><b><label for='password' >Password:</label></br></b>";
 	echo "<input type='text' name= 'password' value='$password' />";
 	echo "<input type='submit' name='Submit' value='Log In' />";
 	echo "</fieldset>";
 	echo "</form>";
 
 	if($_SERVER["REQUEST_METHOD"] == "POST"){
  		
		if(empty($_POST['email']) && empty($_POST['password'])){
   			echo "<br><b>Email and Password are not filled in </b></br>";
  			}

  	else if(empty($_POST['email'])){
   			echo "<b>Email is not filled in.</b>";
 			 }

  	else if(empty($_POST['password'])){
   			echo "<b>Password is not filled in.</b><br>";
  			}
  
  	else{
   			echo "<b> Login FAILED </b>";
 		        }
		 }
	}

else if($userid > 0){
 	header("Location: http://comments.com/index.php"); /* Redirect browser */
	exit();
	}
?>
