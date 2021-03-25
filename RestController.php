<?php 
require_once("RestHandler.php");
$method = $_SERVER['REQUEST_METHOD'];
if(isset($_GET["page_key"]))
$page_key = $_GET["page_key"];
switch($page_key)
{
    case "list";
    $RestHandler = new RestHandler();
    $result = $RestHandler->get();
    break;
}
?>