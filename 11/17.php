<?php
  require_once 'login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (PDOException $e)
  {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
  }

  $user  = mysql_fix_string($pdo, $_POST['user']);
  $pass  = mysql_fix_string($pdo, $_POST['pass']);
  $query = "SELECT * FROM users WHERE user=$user AND pass=$pass";

  // Etc...

  function mysql_fix_string($pdo, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $pdo->quote($string);
  }
?>
