<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="<?php echo $SERVER['PHP_FORM'];?>" method="POST">
      <input type="text" name="string">
      <input type="submit" id="sub">
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["string"];
        $exp = "/[^aeiou ]/i";
        echo "You entered: " . $str;
        echo "The number of consonants: " . preg_match_all($exp, $str);
      }
    ?> 
  </body>
</html>
