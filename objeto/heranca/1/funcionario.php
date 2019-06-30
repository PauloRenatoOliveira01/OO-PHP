<?php

require_once 'pessoa.php';

class Funcionario extends Pessoa {
	private $setor;
	private $trabalhando;

	public function mudarTrabalho(){
		print "O funcionário está mudando de trabalho";
	}

	function getSetor(){
		return $this->setor();
	}

	function getTrabalhando(){
		return $this->trabalho();
	}

	function setSetor($se){
		$this->setor = $se;
	}

	function setTrabalhando($trab){
		$this->trabalhando = $trab;
	}

}



?>