<?php

class Caneta
{
	var $modelo;
	var $cor;
	var $ponta;
	var $carga;
	var $tampada;
	var $status;
	
	function rabiscar()
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
	
	function tampar()
	{
		if($this->status == true)
		{
			print "A caneta está sem tampa. <br />";
		}
		else
		{
			print "A caneta está com tampada. <br />";
		}
	}
	
	function destampar()
	{
		print "A caneta está destampada <br />";
	}
}

?>