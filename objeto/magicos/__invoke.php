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

	public function __invoke(){
		return "<p> Ops. Tentativa de usar o objeto como função </p>";
	}
}


$p = new Pessoa;
$p->nome = "Jakenine Almeida";

print $p->nome;

print $p(); //quando tentar usar um objeto como função, é chamado o método __invoke


?>