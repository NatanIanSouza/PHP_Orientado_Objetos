<?php
// Polimorfismo -- Consiste em reescrever ou substituir um método herdado.

class Animal {

    public function Andar(){
        echo "O animal andou.";
    }

    public function Correr(){
        echo "O animal correu.";
    }
}

class Cavalo extends Animal {
    
    // public function Andar(){
    //     echo "O cavalo andou."; // Podemos reescrever o método.
    // }

    public function Andar(){
        $this->Correr(); // Podemos mudar a função do método.
    }
}

$animal = new Cavalo();
$animal->Andar();