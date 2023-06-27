<?php
namespace DAL;
include_once 'C:\xampp\htdocs\servicos\DAL\conexao.php';
include_once 'C:\xampp\htdocs\servicos\MODEL\cliente.php';

class dalCliente{


    public function Select(){
        $sql = "select * from cliente;";

        $con = Conexao::conectar(); 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();


        foreach ($result as $linha){
            $livro = new \MODEL\Cliente(); 

            $livro->setId($linha['id']); 
            $livro->setNome($linha['nome']);
            
           
          
            $livro->setLivro($linha['livro']); 

            $livro->setTotal($linha['total']);

            $lstLivro[] = $livro; 
        }

        return $lstLivro; 
 
      }


    public function Insert(\MODEL\Cliente $cliente){
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO cliente (nome, livro, total) 
               VALUES  ('{$cliente->getNome()}', '{$cliente->getLivro()}',
                        '{$cliente->getTotal()}');";
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 
    }

    public function SelectID(int $id){

        $sql = "select * from cliente where id=?;";
        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 

        $cliente = new \MODEL\Cliente(); 
        $cliente->setId($linha['id']);
        $cliente->setNome($linha['nome']); 
        $cliente->setLivro($linha['livro']); 
        $cliente->setTotal($linha['total']); 

        return $cliente; 
    }
    
    public function Update(\MODEL\Cliente $cliente){
        $sql = "UPDATE cliente SET nome=?, livro=?, total=? WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);

        $result = $query->execute(array($cliente->getNome(), $cliente->getLivro(), 
                                        $cliente->getTotal(), $cliente->getId()));
        $con = Conexao::desconectar();
        return  $result; 
    }

    public function Delete(int $id){

        $sql = "DELETE FROM cliente where id=?";
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }

}
?>