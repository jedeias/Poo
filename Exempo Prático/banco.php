<?php

class Banco{

    public $numConta;
    protected $tipo; // indiaca ao instaciar um objeto contaPoupanca = 150 // contaCorrente = 50
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->status = false;
        $this->saldo = 0;
    }

    public function abrirConta($newTipo)
    {
        if($newTipo == "contaPoupanca"){

            $this->setTipo("contaPoupanca");
            $this->setSaldo(150);
            $this->status = true;

        }if($newTipo == "contaCorrente"){

            $this->setTipo("contaCorrente");
            $this->setSaldo(50);
            $this->status = true;

        }else{
            echo ("Tipo de conta invalido");
        }

    }

    public function fecharConta()
    {
        if($this->getSaldo() == 0){
            
            $this->status = false;

            echo"Conta fechada";
        }elseif ($this->getSaldo() < 0) {
        
            echo"A conta não pode ser fechada pois existe um debito de {$this->getSaldo()} em abreto";
        
        }elseif ($this->getSaldo() > 0) {
        
            echo"A conta não pode ser fechada pois existe um saldo de {$this->getSaldo()} em abreto";
        
        }
    }

    public function depositar($valorDeposito)
    {
        if($this->status == true){

            $this->setSaldo($valorDeposito);

        }else{

            echo"A conta não esta aberta, portanto não é possivel fazer um deposito.";

        }
    }

    public function sacar($sac)
    {
        if($this->status == true and $sac <= $this->getSaldo()){

            $saldoAntigo = $this->getSaldo();

            $this->setSaldo((-$this->getSaldo()) + ($saldoAntigo - $sac));

        }else{

            echo"A conta não esta aberta ou o saldo de sac estava a cima do saldo da conta";

        }
    }

    public function pagarMensalidade()
    {

        $saldoAntigo = $this->getSaldo();
        
        if($this->tipo == "contaCorrente"){

            $this->setSaldo((-$this->getSaldo()) + ($saldoAntigo - 12));

        }elseif($this->tipo == "contaPoupanca"){
            
            $this->setSaldo((-$this->getSaldo()) + ($saldoAntigo - 20));


        }else{

            echo"tipo de conta invalida!";

        }

    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($newConta)
    {
        $this->numConta = $newConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($newTipo)
    {
        $this->tipo = $newTipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($newDono)
    {
        $this->dono = $newDono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo(int $newSaldo)
    {
        $this->saldo = $this->saldo + $newSaldo;
    }

}

?>