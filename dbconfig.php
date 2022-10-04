<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal";
try{
   $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}catch(PDOException $ex){
   echo "Error: $ex";
   $_SESSION['dberror'] = $ex;
}


?>