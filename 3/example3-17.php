<?php

  echo test();
  echo "<br><br>";
  echo test();
    
  function test()
  {
    static $count = 0;
    echo $count;
    $count++;
  }
?>
