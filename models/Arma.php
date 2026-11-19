<?php 
class Arma{
    private $modelo;
    private $calibre;
    private $ano_lancamento;

    public function __construct($modelo, $calibre, $ano_lancamento)
    {
        $this->modelo = $modelo;
        $this->calibre = $calibre;
        $this->ano_lancamento = $ano_lancamento;
    }

    

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Get the value of calibre
     */ 
    public function getCalibre()
    {
        return $this->calibre;
    }

    /**
     * Get the value of ano_lancamento
     */ 
    public function getAnoLancamento()
    {
        return $this->ano_lancamento;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Set the value of calibre
     *
     * @return  self
     */ 
    public function setCalibre($calibre)
    {
        $this->calibre = $calibre;

        return $this;
    }

    /**
     * Set the value of ano lancamento
     *
     * @return  self
     */ 
    public function setAnoLancamento($ano_lancamento)
    {
        $this->ano_lancamento = $ano_lancamento;

        return $this;
    }
}

?>