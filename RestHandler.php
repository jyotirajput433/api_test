<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 604800');
header('Content-type: application/json');


class RestHandler{
function get(){
$rawData = json_decode(file_get_contents("php://input"));
// echo $rawData;
$name = $rawData->name;
    if(empty($rawData))
    {
      $statusCode =404;
      $rawData = array('success'=> 0);  
    }else{
       $statusCode =200;
    }
    $requestContentType = $_SERVER['HTTP_ACCEPT'];
    $result["output"] = "Hello world " . $name;
    $result["status"] = $statusCode;

    $response = json_encode($result);
    echo $response;


  }
}
?>