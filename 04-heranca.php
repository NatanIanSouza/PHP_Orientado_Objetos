<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar códigos ou comportamentos generalizados */

class Veiculos {
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

class Carro extends Veiculos {
    public function ligarLimpador(){
        echo "Ligando em 3... 2... 1...";
    }
}

class Moto extends Veiculos {
    public function darGrau(){
        echo "Dando grau em 3... 2... 1...";
    }
}

$carro = new Carro();
$carro->modelo = "Camaro";
$carro->cor = "Amarelo";
$carro->ano = 2022;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);

echo "<br>";
echo "<br>";

$moto = new Moto();
$moto->modelo = "Royal Enfield Interceptor 650";
$moto->cor = "Branca";
$moto->ano = 2019;
$moto->Parar();
echo "<br>";
$moto->darGrau();
echo "<br>";
var_dump($moto);