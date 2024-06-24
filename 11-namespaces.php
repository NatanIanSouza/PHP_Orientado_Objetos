<?php
// Namespaces -- Servem para especificar em qual arquivo se refere para quando for chamar uma classe com o mesmo nome em arquivos diferentes.

require 'classes/produto.php';
require 'models/produto.php';

// Neste exemplo, ambos os arquivos possuem uma classe Produto, que causaria conflito. Então, para especificar de qual arquivo está se referindo, devemos incluir o namespace.

// $produto = new Produto(); -- Assim ocorreria o erro de Produto 'indefinido', pois existem mais de uma classe com esse nome.

$produto = new \classes\Produto(); // Incluindo o namespace referenciado na página do arquivo.
$produto->mostrarDetalhes();

echo "<hr>";

// Aqui temos outra maneira de referenciar o namespace.

use models\Produto;

$produto = new Produto();
$produto->mostrarDetalhes();

echo "<hr>";

// Também conseguimos dar um apelido à classe, ao referenciar o namespace com 'use'.

use classes\Produto as prodClasses;

$produto = new prodClasses();
$produto->mostrarDetalhes();