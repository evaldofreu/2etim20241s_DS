<?php
require_once "veiculo.class.php";
require_once "moto.class.php";
require_once "automovel.class.php";
require_once "bicicleta.class.php";
//$auto = new Veiculo();
$veiculos = [
     new Moto(),
     new Automovel("ZZZ-1234","gasolina"),
     new Bicicleta(),   
     new Moto(),
     //new Automovel(),
     //new Automovel(),
     new Bicicleta(),   
     new Bicicleta(),   
     new Bicicleta(),   
     //new Veiculo(),   
     // classe abstrata - Não pode gerar objetos
];


foreach($veiculos as $veiculo){
    echo $veiculo->toString()."\n";
    echo $veiculo->consumo(100)."\n";
}


