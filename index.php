<?php
require('db.php');
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
	echo "<li><a href='/addsite.php'>Add Sites</a></li>";
	echo "<li><a href='/logout.php'>Logout</a></li>";
	echo "</ul>";
	echo "</nav>";
	echo "<section>";
	echo "<p>User is  <b>$user</b></p>";
	echo "<p>Email is <b>$email</b></p>";
	echo "</section>";
	echo " </body>";
	echo "</html>";

	$sql = "SELECT id, domain FROM Site";
	$result = $connect->query($sql);

	echo "\n";
	echo "<b>Here are your domain: </b><br>";

	if($result->num_rows > 0){
 		while($row = $result->fetch_assoc()){
			//echo "" . $row["domain"] . "-" . $row["id"] . "<br>";
			$temp = $row["id"];
			$_GET["id"] = $temp;
                        $tempname = $row["domain"];
                        //echo "hey--$temp<br>";
                        //echo "<a href=" . $temp . ">$temp</a><br>";
                        echo "<a href=site.php?site_id=" . $temp . ">$tempname</a><br>";
 		}
	}
	else
	echo "Nothing in table";		
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

	$sql = "SELECT id, domain  FROM Site";
        $result = $connect->query($sql);

	echo "\n";
	echo "<br><b>Here are your domain: </b><br>";
        if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                        //echo "" . $row["domain"] . "-" . $row["id"] . "<br>";
			$temp = $row["id"];
			$_GET["id"] = $temp;
			$tempname = $row["domain"];
			//echo "hey--$temp<br>";
			//echo "<a href=" . $temp . ">$temp</a><br>";
			echo "<a href=site.php?site_id=" . $temp . ">$tempname</a><br>";
                }
        }
        else
        echo "Nothing in table";
}
?>
