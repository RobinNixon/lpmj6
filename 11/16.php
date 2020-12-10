<?php
  function mysql_fix_string($pdo, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $pdo->quote($string);
  }
?>
