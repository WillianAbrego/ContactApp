<?php
$host = "localhost";
$database="contacts_app";
$user="root";
$password="";

try {
  $conn=new PDO("mysql:host=$host;dbname=$database",$user,$password);
  // foreach ($conn->query("show databases") as $row) {
  //   print_r($row);
  // }
  // die();
} catch (PDOException $e) {
  die("PDO Connetion Error: " . $e->getMessage());
}
?>
