<?php
class contaBanco {
	public 	  $numConta;
	protected $tipo;
	private   $dono;
	private   $saldo;
	private   $status;

	public function __construct(){
		$this->setSaldo(0);
		$this->setStatus(false);
		print "<p>Conta criada com sucesso.</p>";
	}


	public function abrirConta($t)
	{
		$this->tipo = $t;
		$this->setStatus(true);

		if($t == "CC"){
			$this->setSaldo(50);
		}

		elseif($t == "CP"){
			$this->setSaldo(150);
		}
	}
	
	public function fecharConta(){
		if($this->getSaldo > 0){
			print "<p>Conta com dinheiro.</p>";
		}
		elseif ($this->getSaldo < 0) {
			print "<p>Esta conta possuí débito</p>";
		}
		else{
			setStatus(false);
		}
	}

	public function depositar($v){
		if ($this->getSaldo()) {
			$this->setSaldo($this->getSaldo() + $v);
		}
		else{
			print "<p>Conta fechada, impossível depositar.</p>";
		}
	}

	public function sacar($v){
		if ($this->getStatus() == true) {
			if ($this->getSaldo() > @$V) {
				$this->setSaldo($this->getSaldo() - $v);
				print "<p>Sacando R$ {$v} do cliente: {$this->getDono()} </p>";
			}
			else{
				print "<p>Saldo insuficiente.</p>";
			}
		}
		else{
			print "<p>Conta fechada, impossível sacar.</p>";
		}
	}

	public function pagarMensal(){
		if ($this->getTipo() == "CC") { 
			$v = 12;
		}
		else if($this->getTipo() == "CP"){
			$v = 20;
		}
		if($this->getStatus()){
			if($this->getSaldo() > @$V){
				$this->setSaldo($this->getSaldo() - $v);
			}
			else{
				print "<p>Saldo insuficiente.</p>";
			}
		}
		else{
			print "<p>Conta fechada, impossível pagar.</p>";
		}
	}

	public function setNumConta($n){
		$this->numConta = $n;
	}
	public function getNumConta(){
		return $this->numConta;
	}



	public function setTipo($t){
		$this->tipo = $t;
	}
	public function getTipo(){
		return $this->tipo;
	}



	public function setDono($d){
		$this->dono = $d;
	}
	public function getDono(){
		return $this->dono;
	}



	public function setSaldo($s){
		$this->saldo = $s;
	}
	public function getSaldo(){
		return $this->saldo;
	}



	public function setStatus($st){
		$this->status = $st;
	}
	public function getStatus(){
		return $this->status;
	}


	
}