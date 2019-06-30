<?php

/*
 | -------------------------------------------------------
 | final class 
 | -------------------------------------------------------
 | a classe não pode mais ser herdada. 
 | Essa é a classe final, aqui termina a abstração.
 |
 |
 */
require_once 'aluno.php';

final class Bolsista extends Aluno {
	private $bolsa;

	public function renovarBolsa(){
		print "<p>Renovando a bolsa do aluno {$this->getNome()}</p>";
	}

	public function pagarMensalidade(){
		print "<p>Bolsista {$this->getNome()} está pagando a mensalidade. </p>";
	}

    /**
     * @return mixed
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * @param mixed $bolsa
     *
     * @return self
     */
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}



?>