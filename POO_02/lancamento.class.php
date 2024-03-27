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

    function imprimir(){
        echo "<tr><td>".$this->data."</td><td>".
                 $this->descricao."</td><td>".
                 $this->valor."</td><td>".
                 $this->tipo."</td></tr>";
    }

}