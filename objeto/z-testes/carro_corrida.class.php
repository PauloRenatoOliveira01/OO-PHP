<?php

class Carros
{
	public $marca;
	public $modelo;
	public $cv;
	public $v_max;

	public function __construct($ma, $mo, $ca, $ve){

		$this->setMarca ($ma);
		$this->setModelo($mo);
		$this->setCv    ($ca);
		$this->setVMax  ($ve);

	}

	public function apresntarCarros(){
		print 
		"
			Marca:   {$this->getMarca()}  <br />
			Modelo:  {$this->getModelo()} <br />
			Cavalos: {$this->getCv()}     <br />
			Velocidade máxima:  {$this->getVMax()}   <br /><br />
		";
	}

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     *
     * @return self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     *
     * @return self
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param mixed $cv
     *
     * @return self
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVMax()
    {
        return $this->v_max;
    }

    /**
     * @param mixed $v_max
     *
     * @return self
     */
    public function setVMax($v_max)
    {
        $this->v_max = $v_max;

        return $this;
    }
}

?>