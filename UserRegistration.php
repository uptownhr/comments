<?php
$host = "mysql";
$un = "root";
$pw = "asdf";
$db = "Comments";

$connect = new mysqli($host,$un, $pw, $db);

if ($connect->connect_error)
{
 die("Connection failed: " . $connect->connect_error);
}

if(empty($_POST))
{
 echo "----";
 echo $_POST;
}
else if (!empty($_POST) && $_POST['username'] != "" && $_POST['password'] != "")
{
 echo "///"; 

 echo "<b>" . $_POST['username'] . "</b>";

 $username = $_POST['username'];
 $password = $_POST['password'];

 $query = "INSERT INTO User (email, password) VALUES ('$username', '$password')";
 if (mysqli_query($connect, $query)) 
 {
  echo " has been created successfully";
 } 
 else 
 {
  echo "Error: " . $query . "<br>" . mysqli_error($connect);
 }

 mysqli_close($conn);
}
else if ($_POST['username'] == "" && $_POST['password'] != "")
{
 echo "Username field is blank <br>";
}
else if ($_POST['password'] == "" && $_POST['username'] != "")
{
 echo "Password field is blank <br>";
}
else if ($_POST['username'] == "" && $_POST['password'] == "")
{
 echo "Username and Password field are blank <br>";
}
?>

<form id='login' action='UserRegistration.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Creating New User</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >Email:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" />
 
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>
