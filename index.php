<?php
  header("Content-type: application/json"); 
  include("functionsToDb.php");                                           

  switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
      if (isset($_GET["indice"])){
        echo "";
      } else {
        $result = array("cars" => getCars());
        echo json_encode($result);
      }
      break;

    case "POST":
        $newCar = json_decode(file_get_contents("php://input"), true);
        postCar($newCar["brand"], $newCar["color"]);
        $result = array("carCreated" => $newCar);
        echo json_encode($result);
      break;
  }
?>