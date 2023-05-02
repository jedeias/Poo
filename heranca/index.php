<?php


include ("lutador.php");

$lutador = array();

$lutador[0] = new Lutador("Pretty_Boy", "Franca", 31, 1.75, 68.9, 11, 2, 1);
$lutador[1] = new Lutador("PutScritpt", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
$lutador[2] = new Lutador("SnapShadow", "Eua", 35, 1.65, 80.9, 12, 2, 1);
$lutador[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
$lutador[4] = new Lutador("UFOColbol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
$lutador[5] = new Lutador("Nerdaart", "Eua", 30, 1.81, 105.7, 12, 2, 4);


echo"<pre>";

foreach ($lutador as $lutadores){
    echo"<hr>";
    echo $lutadores->apresentar();
    echo $lutadores->status();
    echo"<hr>";
}

?>