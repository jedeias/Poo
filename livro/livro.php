<?php

require_once ("pessoa.php");
require_once ("interface.php");

class livro implements Publicacao{

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private object $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
    }

    #interface strat

    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($pages){
        if($pages > $this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $pages;
        }
    }
    public function avancarPag(){
        $this->setPagAtual( $this->getPagAtual() +1);
    }
    public function voltarPag(){
        $this->setPagAtual( $this->getPagAtual() -1);
    }

    #interface end

	/**
	 * @return mixed
	 */
	public function getTitulo() {
		return $this->titulo;
	}
	
	/**
	 * @param mixed $titulo 
	 * @return self
	 */
	public function setTitulo($titulo): self {
		$this->titulo = $titulo;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getAutor() {
		return $this->autor;
	}
	
	/**
	 * @param mixed $autor 
	 * @return self
	 */
	public function setAutor($autor): self {
		$this->autor = $autor;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTotPaginas() {
		return $this->totPaginas;
	}
	
	/**
	 * @param mixed $totPaginas 
	 * @return self
	 */
	public function setTotPaginas($totPaginas): self {
		$this->totPaginas = $totPaginas;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getPagAtual() {
		return $this->pagAtual;
	}
	
	/**
	 * @param mixed $pagAtual 
	 * @return self
	 */
	public function setPagAtual($pagAtual): self {
		$this->pagAtual = $pagAtual;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getAberto() {
		return $this->aberto;
	}
	
	/**
	 * @param mixed $aberto 
	 * @return self
	 */
	public function setAberto($aberto): self {
		$this->aberto = $aberto;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getLeitor(): object {
		return $this->leitor;
	}
	
	/**
	 * @param  $leitor 
	 * @return self
	 */
	public function setLeitor(object $leitor): self {
		$this->leitor = $leitor;
		return $this;
	}
}

?>