<?php
$servername = "localhost";
$username = "root";
$pass = "";
try
{
  $conn = new PDO("mysql:host=$servername;dbname=HelloDB",$username,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "insert into navdeep values(12,'Navdeep',10)";
  $conn->exec($sql);
  echo "Data inserted Successfully <br>";
} catch (PDOException $e)
{
    echo "$sql" . "<br>" . $e->getMessage();
}



 ?>
