<?php

class Veiculo {
	public $modelo;
	public $cor;
	public $ano;

	private function Andar() {
		echo "Andou";
	}

	public private function Parar(){
		echo "Parou";

	}

	public function mostrarAcao(){
		$this->Andar();
	}
}

class Carro extends Veiculo{

	public function ligarLimpador(){
		echo "Limpando em 3 2 1";
	}
}

$carro = new Veiculo();
$carro->mostrarAcao();
