<?php

$name = $_POST['name'];
$passport = $_POST['passport'];
$address = $_POST['address'];
$mortgage_amount = $_POST['mortgage_amount'];
$property_type = $_POST['property_type'];
$gender = $_POST['gender'];

// Сохранить данные полиса в базе данных

$response = [
  'success' => true,
  'error' => null
];

echo json_encode($response);

?>
