<?php 

class Veiculo{
	public $modelo;
	public $cor;
	public $ano;

	public function Andar(){
		echo "Andou";
	}

	public function Parar(){
		echo "Parou";
	}
}


class Carro extends Veiculo {

	public function LigarLimpador(){
		echo "Limpando em 3 2 1";
	}

}

class Moto extends Veiculo {

	public function darGrau(){
		echo "Dando Grau em 3 2 1";
	}

}

$carro = new Carro();
$carro->modelo ="Gol";
$carro->cor = "Vermelho";
$carro->ano = "2022";
$carro->Andar();
echo "<br>";
$carro->LigarLimpador();
var_dump($carro);


$moto = new Moto();
$moto-> modelo = "Honda";
$moto-> cor = "Preta";
$moto-> ano = "2021";
$carro->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);