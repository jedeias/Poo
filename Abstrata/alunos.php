<?php

require_once ("pessoas.php");

class Alunos extends Pessoas{
    
    private $matricula;
private $curso;
    
    public function pagarMensalidade()
    {
        echo "Pagando a mensalidade do aluno {$this->getNome()}";
    }

	public function getMatricula() {
		return $this->matricula;
	}
	
	public function setMatricula($matricula): self {
		$this->matricula = $matricula;
		return $this;
	}

public function getcurso() {
		return $this->curso;
	}
    
	public function setcurso($curso): self {
		$this->curso = $curso;
		return $this;
	}
}


?>