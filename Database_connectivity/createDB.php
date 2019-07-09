<?php
$servername = "localhost";
$username = "root";
$pass = "";
try
{
    $conn = new PDO("mysql:host=$servername",$username,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "create database HelloDB";

    $conn->exec($sql);
    echo "Database Created Successfully<br>";
}
catch (PDOException $e)
{
  echo "<br>" . $e->getMessage();
}
$conn = null;
 ?>
