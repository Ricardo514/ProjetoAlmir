<?php
namespace DAL;
include 'C:\xampp\htdocs\servicos\DAL\conexao.php';
include 'C:\xampp\htdocs\servicos\MODEL\livro.php';

class dalLivro{


    public function Select(){

        $con = Conexao::conectar(); 
        $sql = "select * from livro;";
        $result = $con->query($sql);
        $con= Conexao::desconectar();
        
        //return $lstlivros; deixamos de retornar ele como linha e passamos a retornar como objeto, assim ele traz os métodos juntos
        foreach ($result as $linha){
            
            $livro = new \MODEL\Livro(); 
    
            $livro->setId($linha['id']); 
            $livro->setNome($linha['nome']);
          
            $livro->setData($linha['data']);
            $livro->setValor($linha['valor']);
    
            $lstLivro[] = $livro; 

        }
        return $lstLivro;
        
    }

    

    public function Insert(\MODEL\Livro $livro){
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO livro (nome, data, valor) 
               VALUES  ('{$livro->getNome()}', '{$livro->getData()}',
                        '{$livro->getValor()}');";
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 
    }

    public function SelectID(int $id){

        $sql = "select * from livro where id=?;";
        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 

        $livro = new \MODEL\Livro(); 
        $livro->setId($linha['id']);
        $livro->setNome($linha['nome']); 
        $livro->setData($linha['data']); 
        $livro->setValor($linha['valor']); 

        return $livro; 
    }
    
    public function Update(\MODEL\Livro $livro){
        $sql = "UPDATE livro SET nome=?, data=?, valor=? WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);

        $result = $query->execute(array($livro->getNome(), $livro->getData(), 
                                        $livro->getValor(), $livro->getId()));
        $con = Conexao::desconectar();
        return  $result; 
    }

    public function Delete(int $id){
        $sql = "DELETE FROM livro where id=?";
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }

}
?>
