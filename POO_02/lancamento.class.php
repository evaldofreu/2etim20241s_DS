<?php class Lancamento {
    private $data;
    private $descricao;
    private $valor;
    private $tipo;
    function __construct($data) {
        $this->data      = $data->data;
        $this->descricao = $data->descricao;
        $this->valor     = $data->valor;
        $this->tipo      = $data->tipo;
    }

}