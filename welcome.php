  <h1> welcome to view page </h1>

  <?php
  error_reporting(0);
session_start();
echo $_SESSION['username'];


?>

<br> <br>

<a href="login.php">logout</a>