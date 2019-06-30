<?php

class Cachorro
{
	public $acordado;

	function __construct(){
		$this->setAcordado(true);
	}

	function pegar(){
		if ($this->getAcordado(true)) {
			print "Corre!! O cachorro está indo te pegar!";
		}
		else{
			print "O cachorro está dormindo...";
		}
	}

	function carinho(){
		if ($this->getAcordado(true)) {
			print "Olha que amor esse cãozinho!";
		}
		else{
			print "Ele está dormindo, não pode brincar";
		}
	}

    /**
     * @return mixed
     */
    public function getAcordado()
    {
        return $this->acordado;
    }

    /**
     * @param mixed $acordado
     *
     * @return self
     */
    public function setAcordado($acordado)
    {
        $this->acordado = $acordado;

        return $this;
    }
}

?>