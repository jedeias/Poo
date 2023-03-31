<?php

class Caneta{

    public $modelo;
    public $cor;
    public $ponta;
    public $tampada;
    public $carga;

    public function rabiscar(){
        
        if($this->tampada == false){

            echo"<br><br> <p style='color: $this->cor' > Rabiscando ... </p> <br><br>";

        }

        else{
            
            echo"<br><br> A caneta esta tampada (Não pode rabiscar...) <br><br> ";
        
        }

    }

    public function tampar(){
        
        $this->tampada = true;

    }

    public function destampar(){

        $this->tampada = false;

    }
    
}

?>