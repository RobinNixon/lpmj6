<?php
  $paper = array('copier' => "Copier & Multipurpose",
                 'inkjet' => "Inkjet Printer",
                 'laser'  => "Laser Printer",
                 'photo'  => "Photographic Paper");

  while (list($item, $description) = myEach($paper))
    echo "$item: $description<br>";

  function myEach(&$array) // Replacement for the deprecated each function
  {
    $key    = key($array);
    $result = ($key === null) ? false :
              [$key, current($array), 'key', 'value' => current($array)];
    next($array);
    return $result;
  }
?>
