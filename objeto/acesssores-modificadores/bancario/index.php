<pre>
<?php

require_once 'contabanco.php';

$p1 = new contaBanco();
$p2 = new contaBanco();

$p1->abrirConta("CC");
$p1->setDono("Jubileu");
$p1->setNumConta(111111);
$p1->depositar(1000);
$p1->sacar(69);
$p1->pagarMensal();

$p2->abrirConta("CP");
$p2->setDono("Maria");
$p2->setNumConta(222222);

print_r($p1);
print_r($p2);

?>
</pre>