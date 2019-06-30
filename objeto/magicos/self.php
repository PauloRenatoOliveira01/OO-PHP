<?php

class Pessoa
{
	const nome = "Pedro Henrique";
	static $idade;

	public function exibirNome(){
		print self::nome; //sel:: serve para mostrar uma constante
		print self::$idade;
	}
}
Pessoa::$idade = 18;

$p = new Pessoa;
$p->exibirNome();

?>