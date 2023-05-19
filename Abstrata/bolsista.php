<?php

require_once ("alunos.php");

final class Bolsista extends Alunos{
    
    private $bolsa;

    public function pagarMensalidade()
    {
        echo "{$this->getNome()} tem desconto por ser bolsista";
    }

    public function renovarBolsa(){
        echo "Bolsa renovada";
    }

	public function getBolsa() {
		return $this->bolsa;
	}

    public function setBolsa($bolsa): self {
		$this->bolsa = $bolsa;
		return $this;
	}

}


?>