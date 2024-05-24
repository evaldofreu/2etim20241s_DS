<?php
class ProdutoController {
    function list(){
        //carregar os dados 
        require_once "helpers/produto.helper.php";
        $produtos = (new ProdutoHelper())->list();    

        //carrega o html da lista de produtos        
        require_once "views/produto/index.php";
    }

    function create() {
        require_once "views/produto/create.php";
    }

    

}