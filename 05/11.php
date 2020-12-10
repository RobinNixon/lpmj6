<?php
  $object = new User;
  print_r($object); echo "<br>";

  $object->name = "Joe";
  $object->password = "mypass";
  print_r($object); echo "<br>";

  $object->save_user();

  class User
  {
    public $name, $password;

    function save_user()
    {
  	  echo "Save User code goes here";
    }
  }
?>
