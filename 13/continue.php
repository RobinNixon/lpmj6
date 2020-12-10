<?php // continue.php
  session_start();

  if (isset($_SESSION['forename']))
  {
    $forename = htmlspecialchars($_SESSION['forename']);
    $surname  = htmlspecialchars($_SESSION['surname']);

    echo "Welcome back $forename.<br>
          Your full name is $forename $surname.<br>";
  }
  else echo "Please <a href='authenticate2.php'>Click Here</a> to log in.";
?>
