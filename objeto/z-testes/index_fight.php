<!DOCTYPE html>
<html>
<head>
	<title>Combate Mortal</title>
</head>
<body>

	<pre>

		<?php

			require_once 'lutar.class.php';

			$lutador = array();

			$lutador[0] = new Lutador("Pedro Muralha",    27, "97KG");
			$lutador[1] = new Lutador("Ricardo Ricardão", 29, "95KG");

			$lutador[0]->aprentarLutador();
			$lutador[1]->aprentarLutador();


			$luta = new Luta();

			$luta->comecarLuta($lutador[0], $lutador[1]);

		?>

	</pre>

</body>
</html>