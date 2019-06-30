<?php


require 'caneta.class.php';

print '<pre>';

$caneta = new Caneta;

$cor    = $caneta->cor     = "Azul";
$modelo = $caneta->modelo  = "Bic Cristal";
$ponta  = $caneta->ponta   = "0.5";
$carga  = $caneta->carga   = "90%";

$tampada= $caneta->tampada = false;
$status = $caneta->status  = true;

print "A caneta tem a cor:   {$cor}   . <br />";
print "A caneta é do modelo: {$modelo}. <br />";
print "A caneta tem a ponta: {$ponta} . <br />";
print "A caneta está com a carga em: {$carga} . <br /><br />";

//print $caneta->tampar();
print $caneta->rabiscar();

print '</pre>';
?>