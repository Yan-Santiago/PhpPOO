<?php

class Pessoa {
	private $dados = array();

	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}

	public function __get($nome) {
		return $this->dados[$nome];
	}

	public function __tostring() {
		return "Tentei imprimir um objeto";
	}

	public function __invoke() {
		return "Objeto com função";
	}
}


$pessoa = new Pessoa();
$pessoa->nome = "Danilo";
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa();

echo $pessoa;

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";