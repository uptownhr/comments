<?php
require('db.php');

session_start();

$user = $_SESSION['user'];
$site2 = $_POST['site'];

if($user > 0){
 	echo "<form id='addsite' action='addsite.php' method='post' accept-charset='UTF-8'>";
        echo "<fieldset>";
        echo "<legend>Please add site: </legend>";
        echo "<input type='hidden' name='submitted' id='submitted' value='1'/>";
        echo "<br><b><label for='site' >Site:</label></br></b>";;
        echo "<input type='text' name= 'site' value='$site' />";
        echo "<input type='submit' name='Submit' value='Add' />";
        echo "</fieldset>";
        echo "</form>";
	
	$length = strlen($site2);
	
	if($length < 4){
		echo "You did not enter a site! ";
	}
	else{
 		if(!$connect->connect_error){
			echo "<b>$site2</b> has been added successfully.";
			$sql = "INSERT INTO Site (domain) VALUES ('$site2')";
        		$result = mysqli_query($connect, $sql);
		}
		else{
 			die("Connection failed: " . $connect->connect_error);
			echo "<b>$site</b> was not added sucessfully.";
		}
	} 
}
else{
 	echo "Please log in";
}
?>
