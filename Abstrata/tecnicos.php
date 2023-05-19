<?php

require_once ("pessoas.php");

final class Tecnicos extends Pessoas{

    private $registroProfissional;


    public final function particar()
    {
        echo"{$this->getNome()} esta praticando";
    }

	public function getRegistroProfissional() {
		return $this->registroProfissional;
	}

	public function setRegistroProfissional($registroProfissional): self {
		$this->registroProfissional = $registroProfissional;
		return $this;
	}
}

?>