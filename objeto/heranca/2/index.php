<!DOCTYPE html>
<html>
<head>
	<title>Abstração POO</title>
</head>
<body>
	<pre>
		<?php

			require_once 'visitante.php';
			require_once 'aluno.php';
			require_once 'bolsista.php';

			print "<P> ------------------------ VISITANTE ------------------------ <P/>";
			$visitante = new Visitante();
			$visitante->setNome('Juvenal');
			$visitante->setIdade(29);
			$visitante->setSexo('M');
			print $visitante->fazerAniversario();
			print_r($visitante);


			print "<P> ------------------------ ALUNO ------------------------ <P/>";
			$aluno = new Aluno();
			$aluno->setNome('Alice Barbosa');
			$aluno->setMatricula('010102');
			$aluno->setCurso('Informática');
			$aluno->pagarMensalidade();
			print_r($aluno);


			print "<P> ------------------------ BOLSISTA ------------------------ <P/>";
			$bolsista = new Bolsista();
			$bolsista->setNome('Getulho Mendes de Oliveira');
			$bolsista->setIdade(22);
			$bolsista->setSexo('M');
			$bolsista->setCurso('Biologia');
			$bolsista->setBolsa(35.5);
			$bolsista->pagarMensalidade();
			print $bolsista->renovarBolsa();
			print_r($bolsista);

		?>
	</pre>
</body>
</html>