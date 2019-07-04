<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTML form</title>
    <?php
    $name=$nameErr=$roll=$rollErr=$father=$fatErr=$mother=$motErr=$standard=$classErr=$gender=$genderErr=$eng=$subErr=$hindi=$maths=$social=$comp=$total=$per=$roundper="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if(empty($_POST["name"]))
      {
        $nameErr = "Name is required";
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
        $fatErr = "Father Name is Required";
      }
      else
      {
      $father = $_POST["father"];
      }

      if(empty($_POST["mother"]))
      {
        $motErr = "Mother Name is required";
      }
      else
      {
      $mother = $_POST["mother"];
      }

      if ($_POST["cls"] > 12)
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
        $gender = test_input($_POST["gender"]);
      }

      if($_POST["english"] > 100)
      {
        $subErr = "Marks should be less then 100";
      }
      else
      {
      $eng = $_POST["english"];
      }

      if($_POST["hindi"] > 100)
      {
        $subErr = "Marks should be less then 100";
      }
      else
      {
      $hindi = $_POST["hindi"];
      }

      if($_POST["math"] > 100)
      {
        $subErr = "Marks should be less then 100";
      }
      else
      {
      $maths = $_POST["math"];
      }

      if($_POST["social"] > 100)
      {
        $subErr = "Marks should be less then 100";
      }
      else
      {
      $social = $_POST["social"];
      }

      if($_POST["hindi"] > 100)
      {
        $subErr = "Marks should be less then 100";
      }
      else
      {
      $hindi = $_POST["hindi"];
      }

      if($_POST["computer"] > 100)
      {
        $subErr = "Marks should be less then 100";
      }
      else
      {
      $comp = $_POST["computer"];
      }
    }
    ?>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <fieldset>
        <legend>Student Information Form</legend>
          Name :-
          <input type="text" name="name"><span><?php echo $nameErr?></span>
          <br>
          <br>
          Rollno :-
          <input type="number" name="rollno" value=""><span><?php echo $rollErr?></span>
          <br>
          <br>
          Father Name :-
          <input type="text" name="father" value=""><span><?php echo $fatErr?></span>
          <br>
          <br>
          Mother Name :-
          <input type="text" name="mother" value=""><span><?php echo $motErr?></span>
          <br>
          <br>
          Class :-
          <input type="text" name="cls" value=""><span><?php echo $classErr?></span>
          <br>
          <br>
          Gender :-
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <span><?php echo $genderErr?></span>
          <br>
          <br>
          <br>
          <b>Enter Subjects Marks out of 100:-</b>
          <br>
          <br>
          <br>
          English :-
          <input type="number" name="english" value=""><span><?php echo $genderErr?></span>
          <br>
          <br>
          Hindi :-
          <input type="number" name="hindi" value=""><span><?php echo $subErr?></span>
          <br>
          <br>
          Maths :-
          <input type="number" name="math" value=""><span><?php echo $subErr?></span>
          <br>
          <br>
          Social :-
          <input type="number" name="social" value=""><span><?php echo $subErr?></span>
          <br>
          <br>
          Computer :-
          <input type="number" name="computer" value=""><span><?php echo $subErr?></span>
          <br>
          <br>
          <input type="submit" name="submit" value="SUBMIT FORM">
      </fieldset>
    </form>

    <?php
    echo "<h1>PERSONAL INFORMATION</h1>";
    echo "<br>";
    echo "<h3>Name :- </h3>";
    echo $name;
    echo "<br>";
    echo "<h3>Rollno :- </h3>";
    echo $roll;
    echo "<br>";
    echo "<h3>father Name :- </h3>";
    echo $father;
    echo "<br>";
    echo "<h3>Mother Name :- </h3>";
    echo $mother;
    echo "<br>";
    echo "<h3>Class :- </h3>";
    echo $standard;
    echo "<br>";
    echo "<h3>Gender :- </h3>";
    echo $gender;
    echo "<br>";
    echo "<h1>Marks</h1>";
    echo "<br>";
    echo "<h3>English :- </h3>";
    echo $eng;
    echo "<br>";
    echo "<h3>Hindi :- </h3>";
    echo $hindi;
    echo "<br>";
    echo "<h3>Maths :- </h3>";
    echo $maths;
    echo "<br>";
    echo "<h3>Social :- </h3>";
    echo $social;
    echo "<br>";
    echo "<h3>Computer :- </h3>";
    echo $comp;
    echo "<br>";



     ?>
  </body>
</html>
