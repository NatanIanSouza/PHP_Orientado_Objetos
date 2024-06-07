<?php

abstract class Banco{ // Abstract -- Pois está servindo como modelo para as classes que a herdarem. Não conseguimos mais instanciar ela, por ser abstrata.
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s); // Criamos métodos abstratos para obrigar as classes que herdarem Banco a também possuírem esses métodos.
    abstract protected function Depositar($d);
}

class Itau extends Banco {

    public function Sacar($s){
        $this->saldo -= $s; // $this->saldo = $this->saldo - $s;
        echo "<hr> Sacou: ". $s;
    }

    public function Depositar($d){
        $this->saldo += $d; // $this->saldo = $this->saldo + $d;
        echo "<hr> Depositou: " .$d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ". $itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ". $itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: ". $itau->getSaldo();