<?php 
class Personagem {
    protected $nome;
    protected $vitalidade;

    function __construct($nome){
        
        $this->nome = $nome;
//        echo "Olá Mundo! Sou um mero personagem,\n".
//        "Meu nome é '$this->nome' \n";
        
    }

    function __destruct(){
        echo "Adeus! Mundo cruel.\nAssinado: '$this->nome' \n".
        "________________________________\n";
    }
}