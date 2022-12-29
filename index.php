<?php


    //getting url
    $url = "";
      if (empty($_GET["url"])){
          $url = "Dashboard/Index";
      }else{
          $url = $_GET["url"];
      }

      $url = explode('/',$url);

      if(empty($url)){
          die("please provide controller and method");
      }

     if(empty($url[0])){
         die("Please provide controller");
     }

     if(empty($url[1])){
         die("Please provide method");
     }
      $controller = $url[0] . "controller";
      $method = $url[1];
      $controllers =  'controllers/' . $controller. '.php';
      if(!file_exists($controllers)){
          die("Controller " . $controller . " does not exists");
      }
      require_once $controllers;
      $obj = new $controller();

      if(!method_exists($obj, $method)){
          die("Controller " . $method . " does not exists");
      }
      $obj->$method();
?>