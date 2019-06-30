<?php


require 'visibilidade_caneta.class.php';

print '<pre>';

$caneta = new Caneta;

$caneta->modelo = "Bic Cristal";
$caneta->cor = "Azul";

$caneta->tampar();
$caneta->validaPonta();

print_r($caneta);

print '</pre>';
?>