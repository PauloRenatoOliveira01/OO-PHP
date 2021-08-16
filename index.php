
<?php
date_default_timezone_set('America/Sao_Paulo');

require_once 'autoload.php';

$usuario = new usuario;

$cadastro = array (
	$nome     = "Maria da Silva",
	$telefone = "51-99999-99",
	$nivel    = "A",
);

$data_cad = date("d/m/Y H:i:s");
$usuario->setDataCadastro($data_cad);

try{
	$usuario->preencherDados($nome, $telefone, $nivel);
}
catch(Exception $e){ 
	print $e->getMessage();
}

if( $nome != NULL && $telefone != NULL && $nivel != NULL){
	$usuario->cadastrar();
}