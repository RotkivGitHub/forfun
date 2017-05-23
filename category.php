<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs.log');

//проверка существования файла
//echo file_exists("animal.json");

/*получение из файла*/

$fileName = $_GET["filename"];

//echo $fileName;

$data = file_get_contents($fileName);
echo file_get_contents($fileName);

//var_dump($data);
?>