<?php

require_once ("lutador.php");

class Luta{

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta(object $desafiado, object $desafiante){
    
        if ($desafiado->getCategoria() === $desafiante->getCategoria() && ($desafiado != $desafiante)){
            $this->setAprovada(true);
            $this->setDesafiante($desafiante);
            $this->setDesafiado($desafiado);
        }else{
            $this->setAprovada(false);
            $this->setDesafiante($desafiante);
            $this->setDesafiado($desafiado);
        }

    }

    public function Luatar(){

        if($this->getAprovada()){

            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = random_int(0,2);
            switch ($vencedor) {
                case 0: // empate
                    
                    $this->desafiado->setEmpates($this->desafiado->getEmpates() + 1);
                    $this->desafiante->setEmpates($this->desafiante->getEmpates() + 1);

                    break;
                    
                case 1: // Desafiando v
                    
                    $this->desafiado->setVitorias($this->desafiado->getVitorias() + 1);
                    $this->desafiante->setDerotas($this->desafiante->getDerotas() + 1);
                    
                    break;
                
                case 2: // desafiante v
                    
                    $this->desafiante->setVitorias($this->desafiante->getVitorias() + 1);
                    $this->desafiado->setDerotas($this->desafiado->getDerotas() + 1);
                    break;
                
                default:
                    echo "Algo deu errado na luta";
                    break;
            }

        }else{
            echo "<p> A luta não foi aprovada </p>";
        }

    }

	public function getDesafiado() {
		return $this->desafiado;
	}
    public function setDesafiado($desafiado): self {
		$this->desafiado = $desafiado;
		return $this;
	}

	public function getRounds() {
		return $this->rounds;
	}
	
	public function setRounds($rounds): self {
		$this->rounds = $rounds;
		return $this;
	}

	public function getAprovada() {
		return $this->aprovada;
	}

    public function setAprovada($aprovada): self {
		$this->aprovada = $aprovada;
		return $this;
	}

	public function setDesafiante($desafiante): self {
		$this->desafiante = $desafiante;
		return $this;
	}

	public function getDesafiante() {
		return $this->desafiante;
	}
}

?>