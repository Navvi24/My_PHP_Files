<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $str = "Navdeep Sharma";
    $pos = strpos($str,"e");
    echo "the position of 'e' is $pos";
    $pos2 = strpos($str,"e",$pos + 1);
    echo "<br>the position of second 'e' is $pos2";
     ?>
  </body>
</html>
