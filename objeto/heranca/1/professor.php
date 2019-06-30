<?php

require_once 'pessoa.php';

class Professor extends Pessoa {
	private $especialidade;
	private $salario;

	public function receberAumento(){
		print "O professor está recebendo um aumento.";
	}

	function getEspecialidade(){
		return $this->especialidade;
	}

	function getSalario(){
		return $this->salario;
	}

	function setEspecialidade($es){
		$this->especialidade = $es;
	}

	function setSalario($sa){
		return $this->salario = $sa;
	}
}


?>