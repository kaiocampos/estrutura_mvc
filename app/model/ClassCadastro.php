<?php
namespace App\model;

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

    #Acesso ao banco de dados com seleção
    protected function selecionaClientes($Nome , $Sexo , $Cidade)
    {
        $Nome='%'.$Nome.'%';
        $Sexo='%'.$Sexo.'%';
        $Cidade='%'.$Cidade.'%';
        $BFetch=$this->Db=$this->conexaoDB()->prepare("SELECT * FROM teste WHERE Nome LIKE :nome and Sexo LIKE :sexo and Cidade LIKE :cidade");
        $BFetch->bindParam(":nome",$Nome,\PDO::PARAM_STR);
        $BFetch->bindParam(":sexo",$Sexo,\PDO::PARAM_STR);
        $BFetch->bindParam(":cidade",$Cidade,\PDO::PARAM_STR);
        $BFetch->execute();

        $I=0;
        while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
            $Array[$I]=['Id'=>$Fetch['Id'],'Nome'=>$Fetch['Nome'],'Sexo'=>$Fetch['Sexo'],'Cidade'=>$Fetch['Cidade']];
            $I++;
        }
        return $Array;
    }

    #Deletar direto no banco
    protected function deletarClientes($Id)
    {
        $BFetch=$this->Db=$this->conexaoDB()->prepare("DELETE FROM teste WHERE Id=:id");
        $BFetch->bindParam(":id",$Id,\PDO::PARAM_INT);
        $BFetch->execute();
    }
    #Atualização direto no DB
    protected function atualizarClientes($Id, $Nome , $Sexo , $Cidade){
        $BFetch=$this->Db=$this->conexaoDB()->prepare("UPDATE teste SET Nome=:nome, Sexo=:sexo, Cidade=:cidade WHERE Id=:id");
        $BFetch->bindParam(":id",$Id,\PDO::PARAM_INT);
        $BFetch->bindParam(":nome",$Nome,\PDO::PARAM_STR);
        $BFetch->bindParam(":sexo",$Sexo,\PDO::PARAM_STR);
        $BFetch->bindParam(":cidade",$Cidade,\PDO::PARAM_STR);
        $BFetch->execute();
    }


}