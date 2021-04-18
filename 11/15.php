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

  $query  = "SELECT * FROM customers";
  $result = $pdo->query($query);

  while ($row = $result->fetch())
  {
    $custname = htmlspecialchars($row['name']);
    $custisbn = htmlspecialchars($row['isbn']);

    echo "$custname purchased ISBN $custisbn: <br>";

    $subquery  = "SELECT * FROM classics WHERE isbn='$custisbn'";
    $subresult = $pdo->query($subquery);
    $subrow    = $subresult->fetch();
    
    $custbook  = htmlspecialchars($subrow['title']);
    $custauth  = htmlspecialchars($subrow['author']);

    echo "&nbsp;&nbsp; '$custbook' by $custauth<br><br>";
  }
?>
