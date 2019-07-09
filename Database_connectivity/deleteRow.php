<?php
$servername = "localhost";
$username = "root";
$pass = "";
try
{
  $conn = new PDO("mysql:host=$servername;dbname=HelloDB",$username,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "delete from navdeep where name = 'ram'";
  $conn->exec($sql);
  echo "data deleted Successfully <br>";
} catch (PDOException $e)
{
    echo "$sql" . "<br>" . $e->getMessage();
}
 ?>
