<?php
// Getters and Setters

class Login {
    // public $email;
    // public $senha;
    private $email; // Agora os atributos estão privados. Então não podem ser acessados fora da classe.
    private $senha;

    // Nesse caso, utilizamos os Getters and Setters -- é um metodo que vai setar um valor ao atributo (set) e o outro método irá pegar esse valor (get).
    public function getEmail() { // Pergará o valor
        return $this->email;
    }

    public function setEmail($e) { // Como iremos setar um valor utilizando este método, precisamos passar o valor por parâmetro.
        $email = filter_var($e, FILTER_SANITIZE_EMAIL); // É interessante utilizarmos o set, pois nele conseguimos aplicar filtros
        $this->email = $email;
    }

    public function getSenha() { // Pergará o valor
        return $this->senha;
    }

    public function setSenha($s) { // Como iremos setar um valor utilizando este método, precisamos passar o valor por parâmetro.
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "natan@teste.com" && $this->senha == "1234"){
            echo "Logado com sucesso!";
        } else {
            echo "Dados incorretos.";
        }
    }
}

$logar = new Login();
$logar->setEmail("natan()/@teste.com"); // Dessa maneira, passamos os valores do parâmetro para o método set.
$logar->setSenha("1234");
$logar->Logar();
echo "<br>";
echo $logar->getEmail(); // Para pegar um valor através do get
echo "<br>";
echo $logar->getSenha();

// Atribuir os valores aos atributos da seguinte maneira não é nada interessante. Só conseguimos fazer isso, pois estão "públicos".
// $logar->email = "natan@teste.com";
// $logar->senha = "1234";