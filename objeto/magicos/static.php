<?php

class Login
{
	public static $usuario;

	public static function verificaLogin(){
		print "O usuário ". self::$usuario ." está logado";
	}
}

Login::$usuario = "Amanda Pereira";
Login::verificaLogin();
?>