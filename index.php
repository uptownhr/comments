<?php
session_start();
$logged_in = false;
$email = false;

if( !empty($_SESSION['user']) ){
  $logged_in = true;
  $email = $_SESSION['user']['email'];
}
?>
<html>
  <body>
    <nav>
      <ul>
        <li><a href="/login.php">Login</a></li>
        <li><a href="/registration.php">Registration</a></li>
      </ul>
    </nav>
    <section>
      <p>User is <?php echo $logged_in?'logged in':'not logged in'; ?></p>
      <p>Email is <?php echo $email; ?></p>
    </section>
  </body>
</html>
