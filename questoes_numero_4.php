 <?php
$variavel = 198;

if(is_string($variavel))     { print "Erro! A variável não é uma número <br />"; }
if(empty($variavel))         { print "Erro! A variável está fazia  <br />"; }
if($variavel != 198)         { print "Erro! Você não digitou: '198'<br />"; } 	
if(strlen($variavel) != 3)   { print "Erro! 198 contém 3 caracteres e você digitou ". strlen($variavel) . " caracter(es)"; }
else { print "A variável está correta!"; }



print "<hr />";



$variavel = "Romarinho";

if(is_numeric($variavel))    { print "Erro! A variável não é uma string <br />"; }
if(empty($variavel))         { print "Erro! A variável está fazia <br />"; }
if($variavel != "Romarinho") { print "Erro! Você não digitou: 'Romarinho'    <br />"; } 	
if(strlen($variavel) != 9)   { print "Erro! Romarinho contém 9 caracteres e você digitou ". strlen($variavel) . "catacter(es)"; }
else { print "A variável está correta!"; }



print "<hr />";



$array = [ 
	"nome"     => "Pedro Luiz", 
	"endereco" => "Av Taquara", 
	"telefone" => "(51) 5151-51511" 
];

if($array["nome"]     == "Pedro Luiz")      { print "<p>Nome correto</p> ";     } else { print "<p>Nome inválido</p>"; }
if($array["endereco"] == "Av Taquara")      { print "<p>Endereço correto</p> "; } else { print "<p>Endereço inválido</p>"; }
if($array["telefone"] == "(51) 5151-51511") { print "<p>Telefone correto</p>";  } else { print "<p>Telefone inválido</p>"; }



?>
		