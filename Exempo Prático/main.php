<?php

require_once("Banco.php");

echo"<pre>";

$conta = new Banco(); 

$conta->abrirConta("contaCorrente");

$conta->setNumConta(8);

$conta->setDono("jorge");

$conta->setSaldo(1030);

$conta->sacar(1069);

$conta->pagarMensalidade();

$conta->fecharConta();

print_r($conta);

?>