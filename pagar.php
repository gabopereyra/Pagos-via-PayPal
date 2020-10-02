<?php

if (!isset($_POST['producto'], $_POST['precio'])) {
    exit("Hubo un error");
}

require 'config.php';

$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (float) $precio;
$envio = 0;

$total = $precio + $envio;
