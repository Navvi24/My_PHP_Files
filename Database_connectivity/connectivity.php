<?php
$servername = "localhost";
$username =  "root";
$pass = "";
try
{
    $conn = new PDO("mysql:host=$servername;dbname=mydb",$username,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch (PDOException $e)
{
  echo "Connection Failed :" . $e->getMessage();
}
?>
