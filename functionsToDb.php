<?php

  function connectToDb(){
    $server = "localhost";
    $user = "id20631523_root";
    $password = "iy[qtH*RqMhjXyC4";
    $dbname = "id20631523_db_from_api";

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


  function postCar($brand, $color){
    $conn = connectToDb();
    $query = "INSERT INTO cars (brand, color) values ('$brand', '$color')";
    $conn->exec($query);
  }
   
?>