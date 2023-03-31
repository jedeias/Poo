<?php

class Caneta{

    private $modelo;
    private $ponta;
    private $tampada;

    public function __construct($newModelo, $newCor, $newPonta)
    {
        $this->modelo = $newModelo;
        $this->cor = $newCor;
        $this->ponta = $newPonta;
        $this->tampar();
    }

    // esta versão do construct pode ser considera pouco dinamica a variar do uso
    
    // public function __construct()
    // {
    //     $this->cor = "Blue";
    //     $this->tampar();
    // }


    // antigamente erra possivel declarar um construct desta forma{
        // public function Caneta()
        // {
        //     $this->cor = "Blue";
        //     $this->tampar();
        // }
    //}

    public function tampar()
    {
        $this->tampada = true;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    
    public function setModelo($newModelo)
    {
        $this->modelo = $newModelo;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($newPonta)
    {
        $this->ponta = $newPonta;
    }

    

}

?>

