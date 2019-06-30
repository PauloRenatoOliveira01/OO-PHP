<?php

require_once 'correr.class.php';

$carros = array();

$carros[0] = new Carros("Citroen",       "C5",  "200", "210");
$carros[1] = new Carros("Alfa Romeo",    "164", "240", "260");
$carros[2] = new Carros("Mercedes Benz", "CLK", "235", "250");

$carros[0]->apresntarCarros();
$carros[1]->apresntarCarros();
$carros[2]->apresntarCarros();


$correr = new Correr;
$correr->classificacao($carros[0], $carros[1], $carros[2]);
?>