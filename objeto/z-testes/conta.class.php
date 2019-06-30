<?php
	
class Conta
{
	private $tipo;
	private $valor;

	function tipoConta($t){
		$this->tipo = $t;
		if($t == "CC"){
			print "Cliente de Conta Corrente";
		}
        elseif($t == "CS"){
            print "Cliente de Conta Salário";
        }
		else{
			print "Tipo de conta não encontrata";
		}
	}

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

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
}

?>