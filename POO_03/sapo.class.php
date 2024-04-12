<?php class Sapo extends Personagem {
     function __construct($nome){
        parent::__construct($nome);
       
        echo "Coach coach coach,\n".
        "disse o sapão: '$this->nome' \n";
    }
    

    
}