<?php //fetchrow.php
  require_once 'login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (PDOException $e)
  {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
  }

  $query  = "SELECT * FROM classics";
  $result = $pdo->query($query);
  
  while ($row = $result->fetch(PDO::FETCH_BOTH)) // Style of fetch
  {
    echo 'Author:   ' . htmlspecialchars($row['author'])    . "<br>";
    echo 'Title:    ' . htmlspecialchars($row['title'])     . "<br>";
    echo 'Category: ' . htmlspecialchars($row['categoryr']) . "<br>";
    echo 'Year:     ' . htmlspecialchars($row['year'])      . "<br>";
    echo 'ISBN:     ' . htmlspecialchars($row['isbn'])      . "<br><br>";
  }
?>