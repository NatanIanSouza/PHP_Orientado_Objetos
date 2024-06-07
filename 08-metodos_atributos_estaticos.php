<?php 

class Login {
    public static $user; // Para criar um atributo ou método estático, basta adicionar o 'static' depois do 'public'

    public static function verificaLogin() {
        echo "O usuário " . self::$user . " está logado."; // Por ser um item estático, temos que usar o self::. Pois o $this não funciona.
    }

    public function sairSistema(){
        echo "Usuário deslogou.";
    }
}

Login::$user = "admin";
Login::verificaLogin(); // Quando se trata de itens estáticos, não precisamos instanciar a classe. Basta utilizar o nome da classe, seguido de dois pontos. (Login::)

echo "<br>";
$login = new Login();
$login->sairSistema();