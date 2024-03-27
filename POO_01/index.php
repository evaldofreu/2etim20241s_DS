<?php
   //classe 
   class AlunoEnsinoMedio {
      //atributos
      public $nome;
      public $periodo = 3;
      public $segundoPeriodo = 5;
      public $curso;  
      //método construtor, responsável
      public function __construct($nome, $periodo, $segundoPeriodo, $curso){
         $this->nome = $nome;
         $this->periodo = $periodo;
         $this->segundoPeriodo = $segundoPeriodo;
         $this->curso = $curso;
         
      }

      //metodos
      function media(){
        return ($this->periodo + $this->segundoPeriodo)/2;
      }

      function __toString(){
         $media = $this->media();
         return "$this->nome - $this->curso media: $media <br>";
      }

   }


   class Curso {
      //atributos
      public $nome;
      public $ano;
      public $professor;

      //metodos: construtor e o toString
      function __construct($nome, $ano, $professor){
         $this->nome = $nome;
         $this->ano = $ano;
         $this->professor = $professor;
      }

      function __toString(){
         return "$this->nome - $this->ano - $this->professor";
      }

   }

   $curso = new Curso("Desenvolvimento de Sistemas", 2024,'Prof. Evaldo e Wesley');  
   $aluno = new AlunoEnsinoMedio('João',8 ,7 ,$curso ); // instanciação
   $aluno2 = new AlunoEnsinoMedio('Maria',10 ,8 ,$curso ); // instanciação
   echo $aluno;
   echo $aluno2;

?>