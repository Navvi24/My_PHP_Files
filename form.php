<?php
$validate = [
  'errMsg' => [
    'name' => '',
    'roll' => '',
    'father' => '' ,
    'mother' => '' ,
    ]
]
  /*echo '<pre>';
  print_r($validation);
  echo '</pre>';

  if(isset($validation['errMsg']['name']))
*/
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registration Form</title>
<?php


    function is_data_valid()
    {

        $ret_arr = [];

        $ret_arr['valid'] = true;

        if(empty($_POST['name'])){
          $ret_arr['errMsg']['name'] = 'Name is missing';
          $ret_arr['valid'] = false;
        }else{
          $ret_arr['errMsg']['name'] = '';
        }







    }

    $name=$nameErr=$roll=$rollErr=$father=$fatErr=$mother=$motErr=$standard=$classErr=$gender=$genderErr=$eng=$hindi=$maths=$social=$comp=$sub1Err=$sub2Err=$sub3Err=$sub4Err=$sub5Err="";
    if (isset($_POST['submit']))
    {

      $validation = is_data_valid();



      if(empty($_POST["name"]))
      {
        $validation['errMsg']['name'];
      }
      else
      {
        $name = $_POST["name"];
      }

      if(empty($_POST["rollno"]))
      {
        $rollErr = "Rollno is required";
      }
      else
      {
      $roll = $_POST["rollno"];
      }

      if(empty($_POST["father"]))
      {
        $fatErr = "Father name is Required";
      }
      else
      {
      $father = $_POST["father"];
      }

      if(empty($_POST["mother"]))
      {
        $motErr = "Mother name is required";
      }
      else
      {
      $mother = $_POST["mother"];
      }

      if ($_POST["cls"] > 12 || empty($_POST["cls"]))
      {
        $classErr = "INVALID";
      }
      else
      {
      $standard = $_POST["cls"];
      }

      if (empty($_POST["gender"]))
      {
        $genderErr = "Gender is required";
      }
      else
      {
        $gender = $_POST["gender"];
      }

      if($_POST["english"] > 100)
      {
        $sub1Err = "Marks should be less then 100";
      }
      else
      {
      $eng = $_POST["english"];
      }

      if($_POST["hindi"] > 100)
      {
        $sub2Err = "Marks should be less then 100";
      }
      else
      {
      $hindi = $_POST["hindi"];
      }

      if($_POST["math"] > 100)
      {
        $sub3Err = "Marks should be less then 100";
      }
      else
      {
      $maths = $_POST["math"];
      }

      if($_POST["social"] > 100)
      {
        $sub4Err = "Marks should be less then 100";
      }
      else
      {
      $social = $_POST["social"];
      }

      if($_POST["computer"] > 100)
      {
        $sub5Err = "Marks should be less then 100";
      }
      else
      {
      $comp = $_POST["computer"];
      }

     }

 ?>
    <style media="screen">
      b
      {
        font-size: 20px;
      }
      .error {color: #FF0000;}
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <fieldset>
        <legend><b>Student Information Form</b></legend>
          Name :-
          <input type="text" name="name" value="<?php echo isset($_POST['name'])?$_POST['name']:''; ?>"> <span class="error">* <?php echo $nameErr;?></span>
          <br>
          <br>
          Rollno :-
          <input type="number" name="rollno" value=""> <span class="error">* <?php echo $rollErr;?></span>
          <br>
          <br>
          Father Name :-
          <input type="text" name="father" value=""> <span class="error">* <?php echo $fatErr;?></span>
          <br>
          <br>
          Mother Name :-
          <input type="text" name="mother" value=""> <span class="error">* <?php echo $motErr;?></span>
          <br>
          <br>
          Class :-
          <input type="text" name="cls" value=""> <span class="error">* <?php echo $classErr;?></span>
          <br>
          <br>
          Gender :-
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female <span class="error">* <?php echo $genderErr;?></span>
          <br>
          <br>
          <br>
          <b>Enter Subjects Marks out of 100:-</b>
          <br>
          <br>
          <br>
          English :-
          <input type="number" name="english" value=""> <span class="error">* <?php echo $sub1Err;?></span>
          <br>
          <br>
          Hindi :-
          <input type="number" name="hindi" value=""> <span class="error">* <?php echo $sub2Err;?></span>
          <br>
          <br>
          Maths :-
          <input type="number" name="math" value=""> <span class="error">* <?php echo $sub3Err;?></span>
          <br>
          <br>
          Social :-
          <input type="number" name="social" value=""> <span class="error">* <?php echo $sub4Err;?></span>
          <br>
          <br>
          Computer :-
          <input type="number" name="computer" value=""> <span class="error">* <?php echo $sub5Err;?></span>
          <br>
          <br>
          <input type="submit" name="submit" value="SUBMIT FORM">
      </fieldset>
      <br>
      <br>
    </form>
<h1></h1>
    <?php
    echo "<h1><b>YOUR INPUT</b></h1>";
    if (isset($_POST['submit']))
    {
      if($validation['valid']){
        ?>
        <h1>XYZ School</h1>
        <table>
          <tr>
            <th colspan="2">PERSONAL INFORMATION</th>
          </tr>
          <tr>
            <th>Name :- </th>
            <td><?php echo $_POST['name']; ?></td>
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
        </table>
      <?php
      }
      else{
        $name=$roll=$father=$mother=$standard=$gender=$eng=$hindi=$maths=$social=$comp="";
      }
    }

     ?>
  </body>
</html>
