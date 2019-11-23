<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
use App\model\ClassCadastro;

class ControllerCadastro extends ClassCadastro{

    protected $Nome;
    protected $Sexo;
    protected $Cidade;

    public function __construct()
    {
        $Render=new ClassRender();
        $Render->setTitle("Cadastro");
        $Render->setDescription("Faça seu cadastro.");
        $Render->setKeywords("cadastro de clientes, cadastro");
        $Render->setDir("cadastro");
        $Render->renderLayout();
    }

    #Receber variáveis
    private function recVariaveis()
    {
        if(isset($_POST['Nome'])){ $this->Nome=filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Sexo'])){ $this->Sexo=filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Cidade'])){ $this->Cidade=filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS); }
    }

    #Chamar o método de cadastro da ClassCadastro
    public function cadastrar()
    {
        $this->recVariaveis();
        $this->cadastroClientes($this->Nome, $this->Sexo,$this->Cidade);
        echo "Cadastro efetuado com sucesso!";
    }
}