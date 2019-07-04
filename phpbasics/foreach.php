<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $empage;
      $empage['jones'] = '28';
      $empage['nick'] = '48';
      $empage['ryan'] = '38';
      $empage['grace'] = '18';
      $empage['rac'] = '58';
      $empage['rache'] = '34';
      $empage['xyz'] = '28';

      foreach ($empage as $key => $value) {
        echo "Name :- $key , Age :- $value <br>";
      }
     ?>
  </body>
</html>
