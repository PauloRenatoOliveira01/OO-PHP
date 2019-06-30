<?php

class Produto
{
	public $nome;

	public function __clone(){

		$this->nome .= ' (CLONE)'; //irá inserer a palavra(CLONE) nos objetos clonados

	}

}

$p = new Produto;
$p->nome = "HD externo";
print $p->nome . '<br />';

$clone = clone $p;
print $clone->nome;


?>