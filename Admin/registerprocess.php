<?php
if($_POST['password'] == $_POST['retypepass'])
{
  require_once("db.php");
  $query = "INSERT into login_page (`username`,`password`) VALUES(?,?)";
  $stmt = $conn->prepare($query);
  $data = [$_POST['username'],$_POST['password']];
  $stmt->execute( $data );
  header("Location: http://localhost/My_PHP_Files/Admin/loginpage.php?reg=1");
  die();
}
else
{
  header("Location: http://localhost/My_PHP_Files/Admin/register.php?err=1");
  die();
}
