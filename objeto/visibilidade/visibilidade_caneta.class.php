<?php

class Caneta
{
	public    $modelo;
	public    $cor;
	private   $ponta;
	protected $carga;
	protected $tampada;
	public    $status;
	
	public function rabiscar()
	{
		if($this->tampada == true)
		{
			print "Não posso rabiscar, verifique a tampa. <br />";
		}
		else
		{
			print "Estou rabiscando. <br />";
		}
	}
	
	public function validaPonta()
	{
		$this->ponta = 1.0;

		if($this->ponta > 1.5)
		{
			print "Ponta muito grande <br />";
		}
		else
		{
			print "Ponta aceita <br />";
		}
	}

	public function tampar()
	{
		if($this->status == true)
		{
			print "A caneta está sem tampa. <br />";
		}
		else
		{
			print "A caneta está com tampa. <br />";
		}
	}
	
	protected function destampar()
	{
		print "A caneta está destampada <br />";
	}
}

?>