<?php

class Pessoa {
	const nome = "Yan";

	public function exibirNome(){
		echo self::nome;
	}
}

class Yan extends pessoa {
	const nome = "Santiago";

	public function exibirNome(){
		echo parent::nome;
	}
}

$pessoa = new Yan();
$pessoa->exibirNome();
