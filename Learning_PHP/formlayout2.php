<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="asset\bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <script src="asset\bootstrap-4.3.1-dist\jquery-3.4.1.min.js"></script>
    <script src="asset\bootstrap-4.3.1-dist\js\bootstrap.min.js"></script>
    <style media="screen">
    table,th,td,tr
    {
        border: 2px solid black;
        border-collapse:collapse;
        width:50%;
        text-align:center;
        padding:10px;
        margin:30px 0px;
    }
    h1
    {
        text-align:center;
        margin-top: 20px;
    }
    h2
    {
      text-align:center;
      margin-top: 20px;
    }
    h1
    {
      font-size:60px;
      margin-bottom : -8px;
    }
    ul
    {
      margin-top: 10px;
    }
    </style>
    <?php
    include 'maincode2.php';
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
  </head>
  <body>
    <div class="container">
      <?php
          if($validation['valid'] == false)
          {
       ?>
            <ul class="alert alert-danger">
              <?php
              if ($validation['errMsg']['name'] == 'Name is missing')
              {
              ?>
                <li><?php echo $validation['errMsg']['name'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['roll'] == 'Rollno is missing')
              {
              ?>
                <li><?php echo $validation['errMsg']['roll'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['father'] == 'Father Name is missing')
              {
              ?>
                <li><?php echo $validation['errMsg']['father'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['mother'] == 'Mother name is missing')
              {
              ?>
                <li><?php echo $validation['errMsg']['mother'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['cls'] == 'INVALID')
              {
              ?>
                <li><?php echo $validation['errMsg']['cls'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['gender'] == 'Gender is not selected')
              {
              ?>
                  <li><?php echo $validation['errMsg']['gender'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['english'] == 'English Marks should be less then 100 and not equal to zero')
              {
              ?>
                  <li><?php echo $validation['errMsg']['english'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['hindi'] == 'Hindi Marks should be less then 100 and not equal to zero')
              {
              ?>
                    <li><?php echo $validation['errMsg']['hindi'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['math'] == 'Maths Marks should be less then 100 and not equal to zero')
              {
              ?>
                      <li><?php echo $validation['errMsg']['math'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['social'] == 'Social Marks should be less then 100 and not equal to zero')
              {
              ?>
                    <li><?php echo $validation['errMsg']['social'] ?></li>
              <?php
              }
            else {}
              ?>

              <?php
              if ($validation['errMsg']['computer'] == 'Computer Marks should be less then 100 and not equal to zero')
              {
              ?>
                  <li><?php echo $validation['errMsg']['computer'] ?></li>
              <?php
              }
            else {}
              ?>

            </ul>
          <?php
          }
         ?>
<form method="post">
  <h2>PERSONAL INFORMATION</h2>
  <div class="form-row">
    <div class="form-group col-md-11">
      <label for="Name">Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name'])?$_POST['name']:''; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="Rollno">Rollno.</label>
      <input type="number" class="form-control" name="rollno" value="<?php echo isset($_POST['rollno'])?$_POST['rollno']:'';?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="FatherName">Father Name</label>
      <input type="text" class="form-control" name="father" value="<?php echo isset($_POST['father'])?$_POST['father']:'';?>">
    </div>
    <div class="form-group col-md-6">
      <label for="MotherName">MotherName</label>
      <input type="text" class="form-control" name="mother" value="<?php echo isset($_POST['mother'])?$_POST['mother']:'';?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="Class">Class</label>
      <input type="text" class="form-control" name="cls" value="<?php echo isset($_POST['cls'])?$_POST['cls']:'';?>">
    </div>
    <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="gender">Gender</label>
      <br>
        <input type="radio" name="gender" value="Male"> Male <span style="margin-right:100px;"></span>
        <input type="radio" name="gender" value="Female"> female
       </label>
    </div>
  </div>
  <h2>SUBJECTS MARKS</h2>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="English">English</label>
      <input type="number" class="form-control" name="english" value="<?php echo isset($_POST['english'])?$_POST['english']:'';?>">
    </div>
    <div class="form-group col-md-2">
      <label for="Hindi">Hindi</label>
      <input type="number" class="form-control" name="hindi" value="<?php echo isset($_POST['hindi'])?$_POST['hindi']:'';?>">
    </div>
    <div class="form-group col-md-2">
      <label for="Maths">Maths</label>
      <input type="number" class="form-control" name="math" value="<?php echo isset($_POST['math'])?$_POST['math']:'';?>">
    </div>
    <div class="form-group col-md-2">
      <label for="Social">Social</label>
      <input type="number" class="form-control" name="social" value="<?php echo isset($_POST['social'])?$_POST['social']:'';?>">
    </div>
    <div class="form-group col-md-2">
      <label for="Computer">Computer</label>
      <input type="number" class="form-control" name="computer" value="<?php echo isset($_POST['computer'])?$_POST['computer']:'';?>">
    </div>
  </div>
    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT FORM">
</form>
    </div>
    <?php
    if (isset($_POST['submit']))
    {
      if($validation['valid']==true)
      {
        ?>
        <div class="container">


        <h1>XYZ School</h1>
        <table class="table table-striped table-hover">
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
        </div>
      <?php
      }
    }
     ?>
  </body>
</html>
