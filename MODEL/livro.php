<?php 
namespace MODEL;

class Livro{
   
    private ?int $id;
    private ?string $nome;
    private ?float $valor;
    private ?string $data;

    public function __construct(){}
     /*public function __construct(?int $id,?string $nome,?float $valor,?string $data)
     {
        $this->id=$id;
        $this->nome=$nome;
        $this->valor=$valor;
        $this->data=$data;
     }
     */

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
          public function getValor(){
return $this->valor;
     }


   public function setValor(float $valor){
      $this->valor=$valor;

   }
     public function getData(){
return $this->data;
     }

     public function setData(string $data){
        $this->data=$data;
     }


    }


?>