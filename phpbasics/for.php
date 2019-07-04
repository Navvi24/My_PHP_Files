<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table,th,td
      {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 5px 40px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    <?php
      $price = 5;
      for ($counter=10; $counter <= 100 ; $counter+=10)
      {
      ?>
          <tr>
              <td><?php echo $counter ?></td>
              <td><?php echo $counter * $price?></td>
          </tr>
      <?php
      }
      ?>

     </table>
  </body>
</html>
