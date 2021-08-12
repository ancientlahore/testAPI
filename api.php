<?php


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
header('x-hello-world: Imran Z');

$name = isset($_GET['name'])?addslashes($_GET['name']):'';

$result = array();
$result['ip'] = $_SERVER['REMOTE_ADDR'];


if($name)
$result['greeting'] = $name;


echo json_encode($result);
?>
