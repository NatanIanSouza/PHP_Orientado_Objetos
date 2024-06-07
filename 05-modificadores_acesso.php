<?php
/* 
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão acessíveis por todos que quiserem acessá-los.

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só pela classe que a declarou.
*/

class Veiculo {
    private $modelo;
    protected $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

    public function setModelo($m){ 
        $this->modelo = $m; // Só conseguimos acessar o atributo $modelo por ele estar nessa mesma classe, pois foi declarado com private.
    }

    public function getModelo(){
        return $this->modelo;
    }

}

class Carro extends Veiculo {

    public function ligarLimpador(){
        echo "Ligando em 3... 2... 1...";
    }

    public function setCor($c){
        $this->cor = $c; // Só conseguimos acessar o atributo $cor por ser uma herança e estar declarada com protected
    }

    public function getCor(){
        return $this->cor;
    }
    
}

class Moto extends Veiculo {

    public function darGrau(){
        echo "Dando grau em 3... 2... 1...";
    }
}

$veiculo = new Veiculo();
$veiculo->ano = 2024; // Só conseguimos acessar o atributo $ano fora da classe pois foi declarado com public
echo $veiculo->ano;
echo "<hr>";

$carro = new Carro();
$carro->setCor("Vermelho Corrida");
echo $carro->getCor();
echo "<hr>";

// $veiculo = new Veiculo();
$veiculo->setModelo("Porsche 911");
echo $veiculo->getModelo();
echo "<hr>";

var_dump($veiculo);
echo "<br>";
var_dump($carro);