<?php

class Pessoa{

    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

	public function getIdade() {
		return $this->idade;
	}

	public function setIdade($idade): self {
		$this->idade = $idade;
		return $this;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setSexo($sexo): self {
		$this->sexo = $sexo;
		return $this;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

    public function fazerAniversario()
    {
        $this->idade ++;
    }

}

?>