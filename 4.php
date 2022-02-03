<?php

class Veiculo {
	protected $modelo;
	public $cor;
	public $ano;

	public function Andar(){
		echo "Andar";
	}

	public function Parar(){
		echo "Parou";
	}

	public function setModelo($m){
		$this->modelo = $m;
	}

	public function getModelo(){
		return $this->modelo;
	}
}

class Carro extends Veiculo{

	public function ligarlimpador(){
		echo "Limpando em 3 2 1";
	}
}

class Moto extends Veiculo{

	public function darGrau(){
		echo "Dando grau em 3 2 1";
	}
}

$veiculo = new Veiculo();
$veiculo->setModelo("Gol");
echo $veiculo->getModelo();
