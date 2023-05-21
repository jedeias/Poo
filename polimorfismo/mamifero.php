<?php

require_once ("animal.php");

class Mamifero extends Animal{

    protected $corPelo;

    public function emitirSon(){
        echo"<p> !som de mamifero </p>";
    }
}

?>