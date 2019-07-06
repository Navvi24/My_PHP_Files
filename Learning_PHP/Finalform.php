<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="asset\bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <script src="asset\bootstrap-4.3.1-dist\jquery-3.4.1.min.js"></script>
    <script src="asset\bootstrap-4.3.1-dist\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
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
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal">
        <h2>Student Information Form</h2>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Name">Name :-</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo isset($_POST['name'])?$_POST['name']:''; ?>"> <span class="error">*<?php echo $validation['errMsg']['name'] ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Rollno">Rollno :-</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Enter Rollno" name="rollno" value="<?php echo isset($_POST['rollno'])?$_POST['rollno']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['roll'] ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="FatherName">Father Name :-</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Father Name" name="father" value="<?php echo isset($_POST['father'])?$_POST['father']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['father'] ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="MotherName">Mother Name :-</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Mother Name" name="mother" value="<?php echo isset($_POST['mother'])?$_POST['mother']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['mother'] ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="class">Class :- </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Class" name="cls" value="<?php echo isset($_POST['cls'])?$_POST['cls']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['cls'] ?></span>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="gender">Gender :- </label>
            <div class="col-sm-10">
              <label class="container">Male
                <input type="radio" name="gender" value="Male">
                <span class="checkmark"></span>
              </label>
              <label class="container">Female
                <input type="radio" name="gender" value="Female"> <span class="error">*<?php echo $validation['errMsg']['gender'] ?></span>
                <span class="checkmark"></span>
              </label>
            </div>
        </div>



          <h2>Enter Subjects Marks out of 100:-</h2>

          <div class="form-group">
              <label class="control-label col-sm-2" for="English">English :-</label>
              <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Enter English Marks" name="english" value="<?php echo isset($_POST['english'])?$_POST['english']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['english'] ?></span>
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="English">Hindi :-</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" placeholder="Enter Hindi Marks" name="hindi" value="<?php echo isset($_POST['hindi'])?$_POST['hindi']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['hindi'] ?></span>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="Maths">Maths :-</label>
              <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Enter Math Marks" name="math" value="<?php echo isset($_POST['math'])?$_POST['math']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['math'] ?></span>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="Social">Social :-</label>
              <div class="col-sm-10">
                  <input type="number" class="form-control" placeholder="Enter Social Marks" name="social" value="<?php echo isset($_POST['social'])?$_POST['social']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['social'] ?></span>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="Computer">Computer :-</label>
              <div class="col-sm-10">
                  <input type="number" class="form-control" placeholder="Enter Computer Marks" name="computer" value="<?php echo isset($_POST['computer'])?$_POST['computer']:'';?>"> <span class="error">*<?php echo $validation['errMsg']['computer'] ?></span>
              </div>
          </div>








          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT FORM">
            </div>
          </div>
    </form>
    <?php
    echo "<h2>YOUR INPUT</h2>";
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
