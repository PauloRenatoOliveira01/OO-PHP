<?php

class Pessoa
{
	private $nome;

	public function __set($nome, $valor){
		$this->nome = $valor;
	}

	public function __get($nome){
		return $this->nome;
	}

	public function __tostring(){
		return "<p>Tentativa de imprimir um objeto</p>";
	}
}


$p = new Pessoa;
$p->nome = "Jakenine Almeida";

print $p->nome;

print $p; //se tentar imprimir um objeto será chamado o método __tostring.

?>