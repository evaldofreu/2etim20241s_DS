<?php
class Conta{
   private $id;
   private $banco;
   private $saldo;

   function __construct($id,$banco,$saldo) {
    $this->id = $id;
    $this->banco = $banco;
    $this->saldo = $saldo;
    echo "Conta ".$this->banco." INICIADA COM: ".$this->saldo."<br>";
   }
   function getId() {
    return $this->id;
   }
   function getBanco(){
    return $this->banco;
   }
   function getSaldo(){
    return $this->saldo;
   }
   function credito($valor){
    $this->saldo += $valor;
    echo "Conta ".$this->banco." +".$valor." saldo atual: ".$this->saldo."<br>";
   }
   function debito($valor){
    $this->saldo -= $valor;
    echo "Conta ".$this->banco." -".$valor." saldo atual: ".$this->saldo."<br>";    
   }
}
$conta = new Conta(1, "Nubank", 1000.00);
$conta->credito(10.0);
$conta->debito(1.0);

echo "Saldo da conta ".$conta->getBanco().":".$conta->getSaldo();






