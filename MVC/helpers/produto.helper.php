<?php
require_once "models/produto.class.php";
class ProdutoHelper {
    function list(){
        return [ 
            new Produto(
                1,
                'Uniform MTEC',
                "Uniforme dos alunos do MTEC",
                30.0,
                "",
                ""
            ),
            new Produto(
                2,
                'Contribuição APM',
                "Contribuição para pagar materiais de consumo.",
                10.0,
                "",
                ""
            ),
            new Produto(
                3,
                'Espeto de Carne da GiGi',
                "Espeto de carne de vaca",
                10.0,
                "",
                ""
            ),
            new Produto(
                4,
                'Espeto de Quiabo da GiGi',
                "Espeto de quiabo",
                8.0,
                "",
                ""
            ),
    
        ];
    }
}