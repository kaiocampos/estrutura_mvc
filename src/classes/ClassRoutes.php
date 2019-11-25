<?php
namespace Src\classes;

use Src\traits\TraitUrlParser;

class ClassRoutes{
    use TraitUrlParser;

    private $Rota;
      #Método de retorno da rota
    public function getRota()
    {
        $Url = $this->parseUrl();
        $I = $Url[0];#$i = indice

        $this->Rota=array(
            ""=>"ControllerHome",
            "home"=>"ControllerHome",
            "sitemap"=>"ControllerSitemap",
            "carro"=>"ControllerCarros",
            "contato"=>"ControllerContato",
            "cadastro"=>"ControllerCadastro",
            "login"=>"ControllerLogin",
        );

        if (array_key_exists($I,$this->Rota)) {
            if (file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")) {
                return $this->Rota[$I];
            }else{
                return "Controller404";
            }
        }else{
            return "Controller404";
        }
    }
}