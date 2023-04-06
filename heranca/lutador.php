<?php
/**
 * Summary of Lutador
 */
class Lutador{

    private $nome;
    private $naciolnalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derotas;
    private $empates;

    public function __construct($nome,$naciolnalidade,$idade,$altura,$peso,$vitorias,$derotas,$empates){
        $this->nome->setNome($nome);
        $this->naciolnalidade->setNaciolnalidade($naciolnalidade);
        $this->idade->setIdade($idade);
        $this->altura->setAltura($altura);
        $this->peso->setPeso($peso);
        $this->vitorias->setVitorias($vitorias);
        $this->derotas->setDerecos($derotas);
        $this->empates->setEmpates($empates);
    }

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	public function getNaciolnalidade() {
		return $this->naciolnalidade;
	}

	public function setNaciolnalidade($naciolnalidade): self {
		$this->naciolnalidade = $naciolnalidade;
		return $this;
	}

	public function getIdade() {
		return $this->idade;
	}

	public function setIdade($idade): self {
		$this->idade = $idade;
		return $this;
	}

	public function getAltura() {
		return $this->altura;
	}

	public function setAltura($altura): self {
		$this->altura = $altura;
		return $this;
	}

	public function getPeso() {
		return $this->peso;
	}

	public function setPeso($peso): self {
		$this->peso = $peso;
		return $this;
	}

	public function getCategoria() {
		return $this->categoria;
	}

	public function setCategoria($categoria): self {
		if($this->getPeso() <= 70.30){
			$this->categoria = "Leve";
		}elseif($this->getPeso() <= 80.90){
			$this->categoria = "Media";
		}elseif($this->getPeso() <= 120.2){
			$this->categoria = "Pesado";
		}else{
			$this->categoria = "Categoria incalida";
		}
	}

	public function getVitorias() {
		return $this->vitorias;
	}

	public function setVitorias($vitorias): self {
		$this->vitorias = $vitorias;
		return $this;
	}


	public function getDerotas() {
		return $this->derotas;
	}
	
	public function setDerotas($derotas): self {
		$this->derotas = $derotas;
		return $this;
	}


	public function getEmpates() {
		return $this->empates;
	}
	
	public function setEmpates($empates): self {
		$this->empates = $empates;
		return $this;
	}




}

?>