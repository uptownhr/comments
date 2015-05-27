<?php
session_start();

$test = $_SESSION['user'];

if($test > 0){
	 header("Location: http://comments.com/index.php"); /* Redirect browser */
 	exit();
}

else{
$host = "mysql";
$un = "root";
$pw = "asdf";
$db = "Comments";

$connect = new mysqli($host,$un, $pw, $db);

if ($connect->connect_error){
 	die("Connection failed: " . $connect->connect_error);
	}

if(empty($_POST)){
	 echo "";
	}

else if (!empty($_POST) && $_POST['email'] != "" && $_POST['password'] != ""){
 	echo "<b>" . $_POST['email'] . "</b>";

 	$email = $_POST['email'];
 	$password = $_POST['password'];

 	$query = "INSERT INTO User (email, password) VALUES ('$email', '$password')";
 
 	if (mysqli_query($connect, $query)) {
  		echo " has been created successfully";
 	} 
 
 	else {
  		echo "Error: " . $query . "<br>" . mysqli_error($connect);
 	}

 	mysqli_close($conn);
	}

else if ($_POST['email'] == "" && $_POST['password'] != ""){
	 echo "Email field is blank <br>";
	}

else if ($_POST['password'] == "" && $_POST['email'] != ""){
 	echo "Password field is blank <br>";
	}

	else if ($_POST['email'] == "" && $_POST['password'] == ""){
 	echo "Email and Password field are blank <br>";
	}
 }
?>

<form id='login' action='UserRegistration.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Creating New User</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='email' >Email:</label>
<input type='text' name='email' id='email'  maxlength="50" />
 
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" />
 
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>
