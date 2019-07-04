<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mark-Sheet</title>
    <?php
    $name = $_POST["name"];
    $roll = $_POST["rollno"];
    $father = $_POST["father"];
    $mother = $_POST["mother"];
    $standard = $_POST["cls"];
    $gender = $_POST["gender"];
    $eng = $_POST["english"];
    $hindi = $_POST["hindi"];
    $maths = $_POST["math"];
    $social = $_POST["social"];
    $comp = $_POST["computer"];
    $total = $eng + $hindi + $maths + $social + $comp;
    $per = ($total/600)*100;
    $roundper = round($per,2);
    ?>
    <style media="screen">
      table,th,td,tr
      {
          border: 2px solid black;
          border-collapse:collapse;
          width:50%;
          text-align:center;
          padding:10px;
          margin:30px 340px;
      }
      .col1
      {
        width:50%;
      }
      h1,h2
      {
        text-align:center;
      }
      h1
      {
        font-size:60px;
        margin-bottom : -8px;
      }
    </style>
  </head>
  <body>
     <h1>XYZ School</h1>
     <h2>Mark-Sheet</h2>
     <table>
       <tr>
         <th colspan="2">PERSONAL INFORMATION</th>
       </tr>
       <tr>
         <th>Name :- </th>
         <td><?php echo $name;?></td>
       </tr>
       <tr>
         <th>Roll no. :-  </th>
         <td><?php echo $roll;?></td>
       </tr>
       <tr>
         <th>Father Name :- </th>
         <td><?php echo $father;?></td>
       </tr>
       <tr>
         <th>Mother Name :- </th>
         <td><?php echo $mother;?></td>
       </tr>
       <tr>
         <th>Class :-</th>
         <td><?php echo $standard;?></td>
       </tr>
       <tr>
         <th>Gender :- </th>
         <td><?php echo $gender;?></td>
       </tr>
       <tr>
         <th colspan="2">SUBJECTS AND MARKS</th>
       </tr>
       <tr>
         <th>English :</th>
         <td><?php echo $eng;?></td>
       </tr>
       <tr>
         <th>Hindi :</th>
         <td><?php echo $hindi;?></td>
       </tr>
       <tr>
         <th>Maths :</th>
         <td><?php echo $maths;?></td>
       </tr>
       <tr>
         <th>Social :</th>
         <td><?php echo $social;?></td>
       </tr>
       <tr>
         <th>Computer :</th>
         <td><?php echo $comp;?></td>
       </tr>
       <tr>
         <th>TOTAL :- </th>
         <td><?php echo $total;?></td>
       </tr>
       <tr>
         <th>PERCENTAGE[%] :- </th>
         <td><?php echo $roundper;?></td>
       </tr>
     </table>
  </body>
</html>
