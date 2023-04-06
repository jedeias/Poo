<?php

require_once ("controleRemoto.php");

echo"<h1> Controle </h1>";

$controle = new Controle();

$controle->ligar();

$controle->maisVolume();

$controle->abrirMenu();

?>