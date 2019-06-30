<?php

require_once 'pessoa.class.php';

class Carro extends Pessoa
{
	public $marca;
	public $modelo;
	public $ano;
	public $valor;
	public $docs;
	public $mecanica;


	public function __construct(){
        $this->setDocs(true);
        $this->setMecanica(true);
    }

    public function capturaContrato(){
        parent::contrato();
    }

    public function validacao(){
		if ($this->getDocs() == true && $this->getMecanica() == true) {
			
            print "<p style=color:#0BB91D> Veículo liberado para venda </p>";

		}

		else {

			print "<p style=color:#FF0000> Aguarde, o veículo ainda não está liberado para venda </p>";
            exit();

		}

	}

	public function vender(){

        $this->cpf = "010110101-24";
        $this->rg  = "8088878777";

        print 
        "
            <strong>Negociando veículo com cliente</strong>
            Marca:  {$this->getMarca()} 
            Modelo: {$this->getModelo()}
            Ano:    {$this->getAno()} 
            Valor:  {$this->getValor()}

            CPF do cliente:   {$this->getCpf()}
            RG do cliente:    {$this->getRg()}

        ";
	}

	public function comprar(){
		print 
        "
            <strong>Comprando veiculo para revender</strong>
            Marca:  {$this->getMarca()} 
            Modelo: {$this->getModelo()}
            Ano:    {$this->getAno()} 
            Valor:  {$this->getValor()}
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
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     *
     * @return self
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     *
     * @return self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocs()
    {
        return $this->docs;
    }

    /**
     * @param mixed $docs
     *
     * @return self
     */
    public function setDocs($docs)
    {
        $this->docs = $docs;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMecanica()
    {
        return $this->mecanica;
    }

    /**
     * @param mixed $mecanica
     *
     * @return self
     */
    public function setMecanica($mecanica)
    {
        $this->mecanica = $mecanica;

        return $this;
    }


}

?>