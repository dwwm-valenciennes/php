<?php

$db = new PDO('mysql:host=localhost;dbname=cars', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$cars = $db->query('SELECT * FROM cars')->fetchAll();

header('Content-Type: application/json');

echo json_encode($cars);
