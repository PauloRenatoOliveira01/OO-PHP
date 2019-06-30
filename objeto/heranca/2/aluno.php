<?php

require_once 'pessoa.php';

class Aluno extends Pessoa {
	private $matricula;
	private $curso;
	
	public function pagarMensalidade(){
		print "<p>Aluno(a) {$this->nome} está pagando a mensalidade. </p>";
	}

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     *
     * @return self
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     *
     * @return self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}

?>