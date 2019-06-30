<?php

define( 'MYSQL_HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DB_NAME', 'formulario' );

try{
	$pdo = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}

catch ( PDOException $e ){
	echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}


$select = $pdo->query("
SELECT id, nome
FROM produtos
WHERE id <> 0 ");
 
$result = $select->fetch(PDO::FETCH_ASSOC);
print $result['nome'];
 


?>