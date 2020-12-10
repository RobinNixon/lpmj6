<?php
  $month = 9;    // September (only has 30 days)
  $day   = 31;   // 31st
  $year  = 2018; // 2018

  if (checkdate($month, $day, $year)) echo "Date is valid";
  else echo "Date is invalid";
?>
