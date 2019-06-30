<?php

class Lutador {
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;

	public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
		$this->nome          = $no;
		$this->nacionalidade = $na;
		$this->idade         = $id;
		$this->altura        = $al;
		$this->setPeso($pe);
		$this->vitorias      = $vi;
		$this->derrotas      = $de;
		$this->empates       = $em;
	}


	function getNome(){
		return $this->nome;
	}	

	function getNacionalidade(){
		return $this->nacionalidade;
	}	

	function getIdade(){
		return $this->idade;
	}	

	function getAltura(){
		return $this->altura;
	}	

	function getPeso(){
		return $this->peso;
	}	

	function getCategoria(){
		return $this->categoria;
	}	

	function getVitorias(){
		return $this->vitorias;
	}	

	function getDerrotas(){
		return $this->derrotas;
	}	
	
	function getEmpates(){
		return $this->empates;
	}	


	function setNome($no){
		$this->nome = $no;
	}	

	function setNacionalidade($na){
		$this->nacionalidade = $na;
	}	

	function setIdade($id){
		$this->idade = $id;
	}	

	function setAltura($al){
		$this->altura = $al;
	}	

	function setPeso($pe){
		$this->peso = $pe;
		$this->setCategoria(); //O peso irá definir a categoria de forma automática
	}	

	private function setCategoria(){
		if($this->peso < 52.2){
			$this->categoria = "Inválido";
		}
		else{
			$this->categoria = "Categoria aceita";
		}
	}	

	function setVitorias($vi){
		$this->vitorias = $vi;
	}	

	function setDerrotas($de){
		$this->derrotas = $de;
	}	
	
	function setEmpates($em){
		$this->empates = $em;
	}	


	public function apresentar(){
		print "<p>Aprenstando os lutadores tal...</p>";
	}

	public function status(){
		print "<p>O status da luta é tal...</p>";
	}

	public function ganharLuta(){
		print "<p>O ganhador da luta é tal...</p>";
	}

	public function perderLuta(){
		print "<p>o perdedor da luta é tal...</p>";
	}

	public function empatarLuta(){
		print "<p>Fulano empatou a luta...</p>";

	}
}


?>