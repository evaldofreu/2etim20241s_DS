<?php
class Produto {
  private $id;
  private $nome;
  private $descricao;
  private $preco;
  private $tamanhos;
  private $cores;

  

  function __construct($id,  $nome,  $descricao,  $preco,  $tamanhos,  $cores){
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->preco = $preco;
    $this->tamanhos = $tamanhos;
    $this->cores = $cores;
  }  

}