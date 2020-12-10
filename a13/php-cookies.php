<!DOCTYPE html>
<html>
  <head>
    <title>Using Cookies</title>
  </head>
  <body>
    <p>The first time this page loads no cookie should have been set and the message below should show that the cookie with the name <b>test</b> has the value <i>false</i> (meaning it is not set).</p>
    <p>But then a value is assigned to the cookie <b>test</b>. To see this new cookie's value click Reload.</p>
    <?php
      $test = 'false';
      if (isset($_COOKIE['test'])) $test = $_COOKIE['test'];
      echo "<p><b>The value of the cookie 'test' is: $test</b></p>";
      setcookie('test', 'I love cookies');
    ?>
  </body>
</html>
