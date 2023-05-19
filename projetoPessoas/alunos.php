<?php

require_once ("pessoas.php");

class Aluno extends Pessoas{

    private int $matr;
    private $curso;    

	/**
	 * @return 
	 */
	public function getMatr(): int {
		return $this->matr;
	}
	
	/**
	 * @param  $matr 
	 * @return self
	 */
	public function setMatr(int $matr): self {
		$this->matr = $matr;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCurso() {
		return $this->curso;
	}
	
	/**
	 * @param mixed $curso 
	 * @return self
	 */
	public function setCurso($curso): self {
		$this->curso = $curso;
		return $this;
	}
}

?>