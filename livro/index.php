<?php

require_once ("pessoa.php");
require_once ("livro.php");

$pessoas[0] = new Pessoa("pedro", 22, "M");
$pessoas[1] = new Pessoa("maria", 31, "F");

$livro[0] = new Livro("PHP", "jose da silva", 300, $pessoas[0]);
$livro[1] = new Livro("JAVA", "Anderson", 540, $pessoas[1]);

echo "<pre>";
print_r($livro);

?>