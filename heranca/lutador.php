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

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->setNome($nome);
        $this->setNaciolnalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerotas($derrotas);
        $this->setEmpates($empates);
    }

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
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
		$this->setCategoria($peso);
		return $this;
	}

	public function getCategoria() {
		return $this->categoria;
	}

	private function setCategoria($categoria): self {
		if($this->getPeso() <= 70.30){
			$this->categoria = "Leve";
		}elseif($this->getPeso() <= 80.90){
			$this->categoria = "Media";
		}elseif($this->getPeso() <= 120.2){
			$this->categoria = "Pesado";
		}else{
			$this->categoria = "Categoria incalida";
		}
		return $this;
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

	public function apresentar()
	{
		echo "<hr>";
		echo "<p> Lutardo " .$this->getNome() ."esta entrado para o combate";
		echo "<p> Nacinalidade {$this->getNaciolnalidade()}</p>";

	}

	public function status()
	{
		echo "<hr>";
		echo "<p> Com atuais " . $this->getVitorias() ." Vitorias e " . $this->getDerotas() . " Derrotas</p>";
		echo "<p> tendo um total de {$this->getEmpates()} Empates</p>";
	}

}

?>