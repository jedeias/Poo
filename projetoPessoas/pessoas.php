<?php

class Pessoas{

    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniversario()
    {
        $this->idade ++;
    }

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdade() {
		return $this->idade;
	}
	
	/**
	 * @param mixed $idade 
	 * @return self
	 */
	public function setIdade($idade): self {
		$this->idade = $idade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSexo() {
		return $this->sexo;
	}
	
	/**
	 * @param mixed $sexo 
	 * @return self
	 */
	public function setSexo($sexo): self {
		$this->sexo = $sexo;
		return $this;
	}
}

?>