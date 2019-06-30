<pre>

<?php

require_once 'aluno.php';
require_once 'professor.php';
require_once 'funcionario.php';

$pessoa1 = new Aluno();
$pessoa2 = new Professor();
$pessoa3 = new Funcionario();

$pessoa1->setNome('Pedro');
$pessoa1->cancelarMatricula();


print_r($pessoa1);

?>

</pre>