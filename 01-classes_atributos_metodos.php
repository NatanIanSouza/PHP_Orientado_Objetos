<?php
// Classes, atributos e métodos.

// Para trabalharmos com objetos, precisamos definir a estrutura do objeto, que será a classe.
class Pessoa {
    // Para criar os atributos
    public $nome; 
    public $idade;

    // Para criar os métodos/funções
    public function Falar() {
        // Para podermos utilizar os atributos ou métodos dentro do escopo da classe, precisamos utilizar o $this (significa "este").
        echo $this->nome. " de ".$this->idade." acabou de falar.";
    }
}

// Como instanciar a classe:
$natan = new Pessoa();
// var_dump($natan); // $natan agora é um objeto

$natan->nome = "Natan Ian Masson"; // Para acessar o atributo $nome
$natan->idade = 19; // Para acessar o atributo $idade
$natan->Falar(); // Agora podemos utilizar os métodos que estão dentro da classe Pessoa.

// echo $natan->nome;