<pre>
<?php

	require_once 'lutador.php';
	require_once 'lutar.php';

	$l = array();

	$l[0] = new lutador("Pedraks Mikes Jr.", "EUA", "28", "1.78", "60", "16", "5", "4");
	$l[1] = new lutador("Jones Oliveira", "BR", "33", "1.85", "0", "33", "11", "9");

	//print_r($l);


	$UEC01 = new Luta();
	$UEC01->marcarLuta($l[0], $l[1]);
	
?>
</pre>