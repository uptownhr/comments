<?php
session_start();
$logged_in = 'not logged in';
$email = false;

if( !empty($_SESSION['user']) ){
  $logged_in = 'logged in';
  $email = $_SESSION['user']['email'];
}
?>
<html>
  <body>
    <nav>
      <ul>
        <li>Login</li>
      </ul>
    </nav>
    <section>
      <p>User is <?php echo $logged_in; ?></p>
      <p>Email is <?php echo $email; ?></p>
    </section>
  </body>
</html>
