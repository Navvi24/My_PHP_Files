<?php
$servername = "localhost";
$username = "root";
$pass = "";
try
{
  $conn = new PDO("mysql:host=$servername;dbname=HelloDB",$username,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "create table navdeep (id int, name char(30),class int NOT NULL)";
    $conn->exec($sql);
    echo "Table Created Successfully <br>";
}
catch (PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
 ?>
