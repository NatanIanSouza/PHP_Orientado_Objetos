<?php
// Interfaces - Servem para definir o modelo a ser usado por outras classes. É um modelo, onde as classes que a implementarem, serão obrigadas a possuir os mesmos métodos criados na interface.

interface Crud {
    public function Create($data);
    public function Read();
    public function Update();
    public function Delete();
}

class Noticias implements Crud { // Para implementar a interface em uma classe utilizamos o 'implements'
    
    public function Create($data){
        // Lógica para criar uma notícia.
    }

    public function Read() {
        // Lógica para visualizar uma notícia.
    }

    public function Update() {
        // Lógica para atualizar uma notícia.
    }

    public function Delete() {
        // Lógica para deletar uma notícia.
    }
}