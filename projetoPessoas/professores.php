<?php

require_once ("pessoas.php");

Class Professores extends Pessoas{

    private $especialidade;
    private $salario;

    public function receberAumento($escopo)
    {
        $this->setSalario($this->getSalario() + $escopo);
    }

	/**
	 * @return mixed
	 */
	public function getEspecialidade() {
		return $this->especialidade;
	}
	
	/**
	 * @param mixed $especialidade 
	 * @return self
	 */
	public function setEspecialidade($especialidade): self {
		$this->especialidade = $especialidade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
		return $this;
	}
}

?>