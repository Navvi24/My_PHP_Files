<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $string = "Deepak Sharma";
    $rep = str_replace("Sharma","maheshwari",$string);
    echo "$string <br>" ;
    echo "$rep";

    $string2 = "123456";
    $sub = substr_replace("$string2","Six","6");
    echo "<br> $sub";

    $name ="navdeep";
    $upper = strtoupper($name);
    echo "<br> $upper";
    $lower = strtolower($upper);
    echo "<br> $lower";


    $title = "hEADING";
    $maintitle = ucwords($title);
    echo "<br> $maintitle";

    $number = "800-900-1000-2000";
    $exp = explode("-",$number);
    echo "<br> First :- $exp[0] <br>";
    echo "Second :- $exp[1] <br>";
    echo "Third :- $exp[2] <br>";
    echo "Fourth :- $exp[3] <br>";
    ?>

  </body>
</html>
