<?php 
   require_once "veiculo.class.php";
   class Automovel extends Veiculo {
      private $combustivel;
      private $placa;
      function __construct($placa, $combustivel){
         $this->placa       = $placa;
         $this->combustivel = $combustivel;
      }

      function consumo($quilometros){

         $litros = round( $quilometros / ($this->combustivel=="gasolina"?10.0:13),2);
          return "O Veículo $this->placa consome $litros litros para percorrer $quilometros.";
      }

      function toString(){
         return "Veículo placa:".$this->placa." à ".$this->combustivel;
      }
   }
?>