<?php
    namespace BLL;

    use DAL\dalLivro; 
    
    include_once '../../DAL/dalLivro.php';
    
        class bllLivro {
            public function Select (){
                $dal = new  \Dal\dalLivro(); 
               
            
                return $dal->Select();
            }

            public function SelectID (int $id){
                $dal = new  \Dal\dalLivro(); 
            
                return $dal->SelectID($id);
            }

            public function Insert (\MODEL\Livro $livro){
            $dal = new \DAL\dalLivro(); 
            $dal->Insert($livro);
            
            }

            public function Update (\MODEL\Livro $livro){

            $dal = new \DAL\dalLivro();
            $dal->Update($livro);
            }

            public function Delete (int $id){

    
                $dal = new \DAL\dalLivro(); 
    
                $dal->Delete($id);
            
            }

    }




?>