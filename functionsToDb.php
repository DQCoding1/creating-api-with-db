<?php

  function connectToDb(){
    $server = "localhost:3307";
    $user = "root";
    $password = "";
    $dbname = "vehicles";

    try {
     $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $conn;
    } catch (PDOException $error){
     echo $error;
    }
  }

      

  function getCars(){
    $conn = connectToDb();
    $query = "SELECT * FROM cars";
    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
  }
   
?>