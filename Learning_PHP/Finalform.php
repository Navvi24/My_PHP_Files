<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="asset\bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <script src="asset\bootstrap-4.3.1-dist\jquery-3.4.1.min.js"></script>
    <script src="asset\bootstrap-4.3.1-dist\js\bootstrap.min.js"></script>
<?php
    include 'maincode.php';
    $validation=array(
      'valid'=>true,
      'errMsg'=>array(
        'name'=>"",
        'roll'=>"",
        'father'=>"",
        'mother'=>"",
        'cls'=>"",
        'gender'=>"",
        'english'=>"",
        'hindi'=>"",
        'math'=>"",
        'social'=>"",
        'computer'=>""
      )
    );
    if (isset($_POST['submit']))
    {
      $validation = is_data_valid();
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
          <input type="text" name="name" value="<?php echo isset($_POST['name'])?$_POST['name']:''; ?>"> <span class="error">*<?php echo $validation['errMsg']['name'] ?></span>
          <br>
          <br>
          Rollno :-
          <input type="number" name="rollno" value="<?php echo isset($_POST['rollno'])?$_POST['rollno']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['roll'] ?></span>
          <br>
          <br>
          Father Name :-
          <input type="text" name="father" value="<?php echo isset($_POST['father'])?$_POST['father']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['father'] ?></span>
          <br>
          <br>
          Mother Name :-
          <input type="text" name="mother" value="<?php echo isset($_POST['mother'])?$_POST['mother']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['mother'] ?></span>
          <br>
          <br>
          Class :-
          <input type="text" name="cls" value="<?php echo isset($_POST['cls'])?$_POST['cls']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['cls'] ?></span>
          <br>
          <br>
          Gender :-
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female <span class="error">*<?php echo $validation['errMsg']['gender'] ?></span>
          <br>
          <br>
          <br>
          <b>Enter Subjects Marks out of 100:-</b>
          <br>
          <br>
          <br>
          English :-
          <input type="number" name="english" value="<?php echo isset($_POST['english'])?$_POST['english']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['english'] ?></span>
          <br>
          <br>
          Hindi :-
          <input type="number" name="hindi" value="<?php echo isset($_POST['hindi'])?$_POST['hindi']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['hindi'] ?></span>
          <br>
          <br>
          Maths :-
          <input type="number" name="math" value="<?php echo isset($_POST['math'])?$_POST['math']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['math'] ?></span>
          <br>
          <br>
          Social :-
          <input type="number" name="social" value="<?php echo isset($_POST['social'])?$_POST['social']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['social'] ?></span>
          <br>
          <br>
          Computer :-
          <input type="number" name="computer" value="<?php echo isset($_POST['computer'])?$_POST['computer']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['computer'] ?></span>
          <br>
          <br>
          <input type="submit" name="submit" class="btn" value="SUBMIT FORM">
      </fieldset>
      <br>
      <br>
    </form>
<h1></h1>
    <?php
    echo "<h1><b>YOUR INPUT</b></h1>";
    if (isset($_POST['submit']))
    {
      if($validation['valid']==true)
      {
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
            <td><?php echo $_POST['rollno']?></td>
          </tr>
          <tr>
            <th>Father Name :- </th>
            <td><?php echo $_POST['father'];?></td>
          </tr>
          <tr>
            <th>Mother Name :- </th>
            <td><?php echo $_POST['mother'];?></td>
          </tr>
          <tr>
            <th>Class :-</th>
            <td><?php echo $_POST["cls"];?></td>
          </tr>
          <tr>
            <th>Gender :- </th>
            <td><?php echo $_POST['gender'];?></td>
          </tr>
          <tr>
            <th colspan="2">SUBJECTS AND MARKS</th>
          </tr>
          <tr>
            <th>English :</th>
            <td><?php echo $_POST['english'] ;?></td>
          </tr>
          <tr>
            <th>Hindi :</th>
            <td><?php echo $_POST["hindi"];?></td>
          </tr>
          <tr>
            <th>Maths :</th>
            <td><?php echo $_POST["math"];?></td>
          </tr>
          <tr>
            <th>Social :</th>
            <td><?php echo $_POST["computer"];?></td>
          </tr>
          <tr>
            <th>Computer :</th>
            <td><?php echo $_POST["computer"];?></td>
          </tr>
        </table>
      <?php
      }
    }
     ?>
  </body>
</html>
