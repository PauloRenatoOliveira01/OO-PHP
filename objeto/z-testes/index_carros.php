<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<style>*{ text-align:left; }</style>
</head>
<body>
	
	<pre>
	
		<?php

			require_once 'carros.class.php';

			$c = new Carro();

			$c->nome    = "Mauricio Ferreira Neto de Castro";
			$c->idade   = 48;
			$c->sexo    = "M";
			
			$c->marca  = "Alfa Romeo";
			$c->modelo = "164";
			$c->ano    = "1995";
			$c->valor  = "29.299,00";
			
			$c->setRenda("3.800,11");
			$c->setHistoricoBancario("Cliente sem Históricos de dívidas");
			$c->validacao();

			$c->capturaContrato();
			//$c->comprar();

			$c->vender();
			
			$c->informacoesCliente();
		?>

	</pre>	

</body>
</html>