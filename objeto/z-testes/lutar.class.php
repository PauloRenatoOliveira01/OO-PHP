<?php 

require_once 'lutador.class.php';

class Luta
{
	public $local;

	function comecarLuta($lutador1, $lutador2){
		print 
		"
			Neste momento estão se enfrentando: {$lutador1->getNome()} <b>VS</b> {$lutador2->getNome()}
		";
	}

}

?>