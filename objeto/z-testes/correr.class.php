<?php

require_once 'carro_corrida.class.php';

class Correr
{
	public function classificacao($carro1, $carro2, $carro3){
		print 
		"
			<p>Classificação Geral</p>
			1° Lugar: {$carro2->getMarca()}  {$carro2->getModelo()} <br />
			2° Lugar: {$carro3->getMarca()} {$carro3->getModelo()}<br />
			3° Lugar: {$carro1->getMarca()} {$carro1->getModelo()}<br />
		";
	}

}

?>