<?php

if (!isset($_POST['producto'], $_POST['precio'])) {
    exit("Hubo un error");
}

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

require 'config.php';

$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int) $precio;
var_dump($precio);
$envio = 0;
$total = $precio + $envio;
