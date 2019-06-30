<pre>

	<?php
	require_once 'controleRemoto.php';

	$controle = new ControleRemoto();

	$controle->ligar();
	$controle->abrirMenu();
	$controle->fecharMenu();
	$controle->ligarMudo();

	print_r($controle);
	?>

</pre>