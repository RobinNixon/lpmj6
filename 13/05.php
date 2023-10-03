<?php // authenticate2.php
  require_once 'login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (\PDOException $e)
  {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

  if (isset($_SERVER['PHP_AUTH_USER']) &&
      isset($_SERVER['PHP_AUTH_PW']))
  {
    $un_temp = $_SERVER['PHP_AUTH_USER']);
    $pw_temp = $_SERVER['PHP_AUTH_PW']);
    $query   = "SELECT * FROM users WHERE username=?";
    $stmt    = $pdo->prepare($query);
    $stmt->execute([$un_temp]);
    $row = $result->fetch();

    if (!$row) die("User not found");

    $fn  = $row['forename'];
    $sn  = $row['surname'];
    $un  = $row['username'];
    $pw  = $row['password'];

    if (password_verify($pw_temp, $pw))
    {
      session_start();

      $_SESSION['forename'] = $fn;
      $_SESSION['surname']  = $sn;

      echo htmlspecialchars("$fn $sn : Hi $fn,
        you are now logged in as '$un'");
      die ("<p><a href='continue.php'>Click here to continue</a></p>");
    }
    else die("Invalid username/password combination");
  }
  else
  {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Please enter your username and password");
  }
  
