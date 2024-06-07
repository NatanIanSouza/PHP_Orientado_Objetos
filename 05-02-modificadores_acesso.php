<?php
/* 
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão acessíveis por todos que quiserem acessá-los.

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só pela classe que a declarou.
*/

// Também podem ser utilizados nos métodos. 

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    private function Andar(){ // Como esse método está declarado com 'private', só conseguimos acessá-lo dentro do escopo da class
        echo "Andou";
    }

    protected function Parar(){ // Conseguímos acessá-lo nesta ou em outra classe que herde Veiculos()
        echo "Parou";
    }

    public function mostrarAcao(){ // Só conseguimos acessar o método privade Andar() com um método público dentro da classe para chamar ele
        $this->Andar();
    }

}

class Carro extends Veiculo {

    public function ligarLimpador(){
        echo "Ligando em 3... 2... 1...";
    }

    public function mostrarAcao2(){ // Acessando o método Parar() declarado com 'protected' na classe mãe Veiculos
        $this->Parar();
    }

}

$veiculo = new Veiculo();
$veiculo->mostrarAcao();
echo "<hr>";

$carro = new Carro();
$carro->mostrarAcao2();