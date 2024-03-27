<?php
require "lancamento.class.php";


class Conta {
    private $nome;
    private $conta;
    private $lancamentos;

    function __construct($data) {
        $this->nome = $data->nome;
        $this->conta = $data->conta;
        $this->lancamentos = array();
        foreach($data->lançamentos as $lan){
              $lancto = new Lancamento($lan);
              array_push($this->lancamentos,$lancto);  
        }
    }

    function imprimeExtrato(){
         echo "<table>";
         echo "<caption>Extrato da Conta $this->conta</caption>";
         echo "<tr><th>Data</th><th>Descrição</th><th>Valor</th><th>Tipo</th></tr>";
         foreach($this->lancamentos as $lan){
            echo "<tr><td>".$lan->data."</td><td>".
                 $lan->descricao."</td><td>".
                 $lan->valor."</td><td>".
                 $lan->tipo."</td></tr>";
         }           
         echo "</table>";

    }

}