<?php

class Lutador
{
	public $nome;
	public $idade;
	public $peso;

	function __construct($no, $id, $pe){
		$this->setNome($no);
		$this->setIdade($id);
		$this->setPeso($pe);
	}

	function aprentarLutador(){

		print 
		"	
			<b>Nome: </b> {$this->nome}  <br />
			<b>Idade:</b> {$this->idade} <br />
			<b>Peso: </b> {$this->peso}  <br /><br />
		";
	}

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     *
     * @return self
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     *
     * @return self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }
}

?>