<?php

class Login {

	public static $user;

	public static function verificarLogin() {
		echo "O usuario ".self::$user." esta logado!";
	}

	public function sairSistema() {
		echo "O usuario deslogou";
	}
}
$login = new Login();
Login:: $user = "admin";
Login::verificarLogin();
echo "<br>";
$login->sairSistema();