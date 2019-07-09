<?php
$servername = "localhost";
$username = "root";
$pass = "";
try
{
  $conn = new PDO("mysql:host=$servername;dbname=HelloDB",$username,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("insert into navdeep (id,name,class) values (:id, :name, :class)");
  $stmt->bindParam(':id',$id);
  $stmt->bindParam(':name',$name);
  $stmt->bindParam(':class',$class);

  //Row 1
  $id = 1001;
  $name = "John Doe";
  $class = 01;
  $stmt->execute();

  //Row 2
  $id = 1002;
  $name = "Marry Moe";
  $class = 02;
  $stmt->execute();

  //Row 3
  $id = 1003;
  $name = "Julie";
  $class = 03;
  $stmt->execute();

  echo "New Record Inserted  Successfully";
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;



 ?>
