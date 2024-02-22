<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

//Recupero il path del JSON

$path = __DIR__ . '/../../database/tasks.json';

$json_data = file_get_contents($path);

$tasks = json_decode($json_data, true);

header('Content-Type: application/json');

echo json_encode($tasks);