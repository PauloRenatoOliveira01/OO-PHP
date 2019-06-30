<?php

require_once 'controlador.php';

class ControleRemoto implements Controlador
{
	private $ligado;
	private $volume;
	private $tocando;

	public function __construct(){
		$this->volume  = 50;
		$this->ligado  = false; 
		$this->tocando = false;
	}

	private function getLigado(){
		return $this->ligado;
	}

	private function getVolume(){
		return $this->volume;
	}

	private function getTocando(){
		return $this->tocando;
	}

	private function setLigado($l){
		$this->ligado = $l;
	}

	private function setVolume($v){
		$this->volume = $v;
	}

	private function setTocando($t){
		$this->tocando = $t;
	}



	public function ligar(){
		$this->setLigado(true);
	}
	public function desligar(){
		$this->setLigado(false);
	}

	public function abrirMenu(){
		print "<p>Esta ligado?  " . ($this->getLigado()  ? "SIM</p>" : "NÃO</p>"); 
		print "<p>Esta tocando? " . ($this->getTocando() ? "SIM</p>" : "NÃO</p>"); 
		print "<p>Volume: " .  $this->getVolume(). "</p>";
	}

	public function fecharMenu(){
		print "<p>Fechando o menu...</p>";
	}

	public function maisVolume(){
		print "<p>Aumentando o volume.</p>";
	}

	public function menosVolume(){
		print "<p>Diminuindo o volume.</p>";
	}

	public function ligarMudo(){
		print "<p>A tv está muda.</p> ";
	}

	public function desligarMudo(){
		print "<p>A tv tem volume novamente.</p>";
	}
	public function play(){
		print "<p>Play! O filme vai começar</p>";
	}
	public function pause(){
		print "<p>Pause! Você parou o filme</p>";
	}
}


?>