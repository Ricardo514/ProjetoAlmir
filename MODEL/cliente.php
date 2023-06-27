<?php 
namespace MODEL;

class Cliente{
   
    private ?int $id;
    private ?string $nome;
    private ?int $livro;
    private ?float $total;

    public function __construct(){}

     public function getId(){
return $this->id;
     }

     public function setId(int $id){
        $this->id=$id;
        
     }
             public function getNome(){
return $this->nome;
     }

     public function setNome(string $nome){
        $this->nome=$nome;
     }

          public function getLivro(){
return $this->livro;
     }


   public function setLivro(int $livro){
      $this->livro=$livro;

   }
     public function getTotal(){
return $this->total;
     }

     public function setTotal(float $total){
        $this->total=$total;
     }


    }
?>