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

  $stmt = $pdo->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');
  $stmt->bindParam(1, $author,   PDO::PARAM_STR, 128);
  $stmt->bindParam(2, $title,    PDO::PARAM_STR, 128);
  $stmt->bindParam(3, $category, PDO::PARAM_STR, 16 );
  $stmt->bindParam(4, $year,     PDO::PARAM_INT     );
  $stmt->bindParam(5, $isbn,     PDO::PARAM_STR, 13 );
  
  $author   = 'Emily Brontë';
  $title    = 'Wuthering Heights';
  $category = 'Classic Fiction';
  $year     = '1847';
  $isbn     = '9780553212587';

  $stmt->execute([$author, $title, $category, $year, $isbn]);
  printf("%d Row inserted.\n", $stmt->rowCount());
?>
