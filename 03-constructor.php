<?php
// Construct -- É inicializado assim que instanciamos uma classe. É um método.

class Login2 {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome() { 
        return $this->nome;
    }

    public function getEmail() { 
        return $this->email;
    }

    public function setEmail($e) { 
        $email = filter_var($e, FILTER_SANITIZE_EMAIL); 
        $this->email = $email;
    }

    public function getSenha() { 
        return $this->senha;
    }

    public function setSenha($s) {
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

$logar = new Login2("natan@teste.com", "1234", "Natan Ian"); // Passamos os valores via parâmetro para o __construct aqui
$logar->Logar();
echo "<br>";
echo $logar->getNome();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();