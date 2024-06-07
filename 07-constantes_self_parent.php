<?php

class Pessoa {
    const nome = "Natan"; // Para criar uma constante

    public function exibirNome(){
        echo self::nome; // Para exibir o conteúdo da constante dentro do escopo usamos o Self::(nome da constante)
    }
}

class Natan extends Pessoa {
    const nome = "Masson";

    public function exibirNome(){
        // echo self::nome; // Essa função irá exibir "Masson", pois quando utilizamos o self ele entende que estamos nos referindo a constante dentro do escopo da classe.
        echo parent::nome; // Para referenciarmos a constante da classe pai (Pessoa), utilizamos o 'parent'.
    }
}

$nome = new Natan();
$nome->exibirNome();