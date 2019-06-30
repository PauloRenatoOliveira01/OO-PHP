<?php

require_once 'lutador.php';

class Luta {
	private $desafiado;
	private $desafiante;
	private $routes;
	private $aprovada;

	public function marcarLuta($l1, $l2){
		print "Marcando a luta entre: ";
		print $l1->getNome() . ' VS ' . $l2->getNome();
	}

	public function lutar(){
		print "A luta está valendo!";
	}

	function getDesafiado(){
		return $this->desafiado;
	}

	function getDesafiante(){
		return $this->desafiante;
	}

	function getRoutes(){
		return $this->routes;
	}

	function getAprovada(){
		return $this->aprovada;
	}

	function setDesafiado($dsafiado){
		$this->desafiado = $dsafiado;
	}
	
	function setDesafiante($dsafiante){
		$this->desafiante = $dsafiante;
	}

	function setRoutes($ro){
		$this->routes = $ro;
	}


	function setAprovada($ap){
		$this->aprovada = $ap;
	}
}

?>