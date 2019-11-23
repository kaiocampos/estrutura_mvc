<?php
namespace App\Model;

use App\model\ClassConexao;

class ClassCadastro extends ClassConexao{

    private $Db;

    #Cadastrará os clientes no sistema
    protected function cadastroClientes($Nome , $Sexo , $Cidade)
    {
        $Id=0;
        $this->Db=$this->conexaoDB()->prepare("INSERT INTO teste VALUES(:id , :nome , :sexo , :cidade)");
        $this->Db->bindParam(":id",$Id,\PDO::PARAM_INT);
        $this->Db->bindParam(":nome",$Nome,\PDO::PARAM_STR);
        $this->Db->bindParam(":sexo",$Sexo,\PDO::PARAM_STR);
        $this->Db->bindParam(":cidade",$Cidade,\PDO::PARAM_STR);
        $this->Db->execute();
    }
}