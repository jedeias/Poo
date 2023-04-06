<?php

require_once ("controlador.php");

Class Controle implements Controlador{
    private $volume;

    private $ligado;

    private $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


	private function getVolume() {
		return $this->volume;
	}

	private function setVolume($volume): self {
		$this->volume = $volume;
		return $this;
	}

	private function getLigado() {
		return $this->ligado;
	}
	
	private function setLigado($ligado): self {
		$this->ligado = $ligado;
		return $this;
	}

	private function getTocando() {
		return $this->tocando;
	}

	private function setTocando($tocando): self {
		$this->tocando = $tocando;
		return $this;
	}

	public function ligar(){
		$this->setLigado(true);
	}

	public function desligar(){
		$this->setLigado(false);
	}

	public function abrirMenu(){

		echo"<p>------- MENU -------</p>";

        echo("<br> está ligado?:" . ($this->getLigado() ? "SIM" : "NÃO"));

		echo("<br> está tocando?:" . ($this->getLigado() ? "SIM" : "NÃO"));

		echo("<br>" . $this->getVolume());

		for ($i=0; $i <= $this->getVolume() ; $i++) { 
			echo ("|") ;
		}

    }

	public function fecharMenu(){
		echo"fechando Menu...";
    }

	public function maisVolume(){
		if ($this->getLigado()){

			$this->setVolume($this->getVolume() + 5);

		}
    }

	public function menosVolume(){

		if ($this->getLigado()){
		
			$this->setVolume($this->getVolume() + 5);
		
		}

    }

	public function ligarMudo(){

		if ($this->getLigado() and $this->getVolume() > 0){

			$this->setVolume($this->getVolume() - $this->getVolume());

		}

    }

	public function desliagrMudo(){

		if ($this->getLigado() and $this->getVolume() < 0){

			$this->setVolume($this->getVolume() + 50);

		}

    }

	public function play(){

		if($this->getTocando() == false and $this->getLigado() == true){
			$this->setTocando(true);
		}

    }

	public function pause(){

	    if($this->getTocando() == true and getLigado() == true ){
            $this->setTocando(false);
        }

    }

}

?>