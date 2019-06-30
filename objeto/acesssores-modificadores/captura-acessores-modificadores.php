<?php


require 'caneta-acessores-modificadores.class.php';

print '<pre>';

$caneta = new Caneta("Azul marinho", 1.99, "Bic Cristal");

/*
$caneta->modelo = "Bic Cristal";
$caneta->setPonta(0.5);
$caneta->cor = "Preto"; # se comentar carrega a cor pradrão, azul marinho
*/

/*
print "Eu tenho uma caneta: {$caneta->getModelo()} de ponta: {$caneta->getPonta()} <br />";
print "A caneta tem a cor: {$caneta->cor} e custa: {$caneta->valor}";
*/


print $caneta->cor    . "<br />";
print $caneta->valor  . "<br />";
print $caneta->modelo . "<br />";

//ponta é um método protegido
$caneta->setPonta(1.5);
print $caneta->getPonta();

print '</pre>';
?>