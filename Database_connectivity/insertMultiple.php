<?php
$servername = "localhost";
$username = "root";
$pass = "";
try
{
  $conn = new PDO("mysql:host=$servername;dbname=HelloDB",$username,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->beginTransaction();
  $conn->exec("Insert into navdeep values(5,'ram',6)");
  $conn->exec("Insert into navdeep values(7,'shyam',8)");
  $conn->exec("Insert into navdeep values(9,'nick',24)");
  $conn->exec("Insert into navdeep values(11,'cyx',26)");
  $conn->commit();
  echo "Multiple Record inserted Successfully";
}
catch (PDOException $e)
{
echo "$sql" . "<br>" . $e->getMessage();
}

$conn = null;

 ?>
