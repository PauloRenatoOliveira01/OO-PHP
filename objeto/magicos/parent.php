<?php

class Pessoa
{
	const nome = "Pedro Henrique";

	public function exibirNome(){
		print self::nome; //sel:: serve para mostrar uma constante
	}
}

class Humano extends Pessoa
{
	const nome = "Carlos Oliveira";

	public function exibirNome(){
		print parent::nome; //Irá imprimir Pedro Henrique, parent chamará o outro método com o mesmo nome(exibirNome)
	}
}

$p = new Humano;
$p->exibirNome();

?>