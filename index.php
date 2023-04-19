<?php
  header("Content-type: application/json"); 
  include("functionsToDb.php");                                           

  switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
      if (isset($_GET["indice"])){
        echo "";
      } else {
        print_r(getCars());
      }
      break;
  
  }
?>