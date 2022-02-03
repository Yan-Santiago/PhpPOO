<?php

class Pessoa {
	public $nome;
	public $idade;

	public function Falar() {
		echo $this->nome."de ".$this->idade." Acabou de falar <br>";

	}
}	

$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira <br> ";
$rodrigo->idade = 25;
$rodrigo->Falar();