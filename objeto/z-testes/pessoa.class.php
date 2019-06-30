<?php

class Pessoa
{
	public    $nome;
	public    $idade;
	public    $sexo;
    protected $cpf;
    protected $rg;
    private   $renda;
    private   $historico_bancario;
 
    public function contrato(){
        print 
        "
            <p>Contrato de compra e venda</p>
            
            This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public.
            License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later.version.

            This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
            without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
            See the GNU General Public License for more details.

            Ass ___________   Ass ___________

            Date___/___/___
        ";
    }

	public function informacoesCliente(){
    
		print 
		"
			<strong>Dados do cliente</strong>
			Nome do cliente:     {$this->getNome()}
			Idade do cliente:    {$this->getIdade()}
			Sexo do cliente:     {$this->getSexo()}
            Renda do cliente R$: {$this->getRenda()}
            Histórico bancario   {$this->getHistoricoBancario()}
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
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     *
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     *
     * @return self
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRenda()
    {
        return $this->renda;
    }

    /**
     * @param mixed $renda
     *
     * @return self
     */
    public function setRenda($renda)
    {
        $this->renda = $renda;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHistoricoBancario()
    {
        return $this->historico_bancario;
    }

    /**
     * @param mixed $historico_bancario
     *
     * @return self
     */
    public function setHistoricoBancario($historico_bancario)
    {
        $this->historico_bancario = $historico_bancario;

        return $this;
    }
}

?>