<?php

class Caneta{

    private $modelo;
    private $ponta;
    private $cor;

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

