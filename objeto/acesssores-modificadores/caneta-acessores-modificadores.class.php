<?php

class Caneta
{
	public  $cor;
	public  $valor;
	public  $modelo;
	private $ponta;
	
	/*
	public function __construct() //o método construtor pode ter o mesmo nome da classe. Ex: public function Caneta()
	{
		$this->cor   = "Azul Marinho";
		$this->valor = 1.99;
	}
	*/

	public function __construct($c, $v, $m)
	{
		$this->cor    = $c;
		$this->valor  = $v;
		$this->modelo = $m;
	}
	
	public function getPonta()
	{
		return $this->ponta;
	}
	public function setPonta($p)
	{
		$this->ponta = $p;
	}
	
	/*
	public function getModelo()
	{
		return $this->modelo;
	}
	public function setModelo($m)
	{
		$this->modelo = $m;
	}
	*/

	
}

?>