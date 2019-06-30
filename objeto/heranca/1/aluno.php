<?php

require_once 'pessoa.php';

class Aluno extends Pessoa{
	private $matricula;
	private $curso;

	function cancelarMatricula(){
		print "O aluno(a) {$this->getNome()} está cancelando a matricula.";
	}

	function getMatricula(){
		return $this->matricula;
	}

	function setMatricula($ma){
		$this->matricula = $ma;
	}

	function getCurso(){
		return $this->curso;
	}

	function setCurso($cur){
		$this->curso = $cur;
	}
}

?>