<?php // copyfile2.php
  if (!copy('testfile.txt', 'testfile2.txt'))
    echo "Could not copy file";
  else echo "File successfully copied to 'testfile2.txt'";
?>
