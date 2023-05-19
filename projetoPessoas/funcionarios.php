<?php

require_once ("pessoas.php");

class Funcionarios extends Pessoas{
 
    private $setor;
    private $trabalhando;    

    function mudarTrabalho()
    {
        $this->trabalhando = ! $this->trabalhando;
    }

	/**
	 * @return mixed
	 */
	public function getSetor() {
		return $this->setor;
	}
	
	/**
	 * @param mixed $setor 
	 * @return self
	 */
	public function setSetor($setor): self {
		$this->setor = $setor;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTrabalhando() {
		return $this->trabalhando;
	}
	
	/**
	 * @param mixed $trabalhando 
	 * @return self
	 */
	public function setTrabalhando($trabalhando): self {
		$this->trabalhando = $trabalhando;
		return $this;
	}
}

?>