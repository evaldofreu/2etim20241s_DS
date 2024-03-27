<?php

class Usuario {
  public $id;
  public $nome;
  public $email;
  private $senha;

  //encapsulamento
  function __construct($id, $nome, $email, $senha){
    $this->id = $id;
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
  }
  

  function __toString(){
    return "$this->nome";
  }

  function validar($email, $senha){
    return $this->email==$email && $this->senha==$senha;
  }

}

$usuario = new Usuario(1, "Evaldo","evaldo.junior@etec.sp.gov.br", "123456");

if ($usuario->validar("evaldo.junior@etec.sp.gov .br","123456")) {
   echo "Usuário válido! Acesso autorizado";
} else {
    echo "Usuário inválido! Acesso não autorizado";
}

?>




