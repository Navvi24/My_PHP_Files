<?php
$servername = "localhost";
$username = "root";
$pass = "";
try
{
  $conn = new PDO("mysql:host=$servername;dbname=HelloDB",$username,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "insert into navdeep values(22,'deep','21'";
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "New Record Inserted Successfully. Last Insert ID is :-  " . $last_id;
}
catch (PDOException $e)
{
  echo "$sql" . "<br>" . $e.getMessage();
}
$conn =  null;
 ?>
