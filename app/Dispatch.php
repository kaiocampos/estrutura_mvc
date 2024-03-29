<?php
namespace App;

use Src\classes\ClassRoutes;

class Dispatch extends ClassRoutes{

    #Atributos
    private $Method;
    private $Param=[];
    private $Obj;

    protected function getMethod(){
        return $this->Method;
    }

    public function setMethod($Method){
        $this->Method = $Method;
    }
    protected function getParam()
    {
        return $this->Param;
    }
    public function setParam($Param)
    {
        $this->Param = $Param;
    }
    
    #Método Construtor
    public function __construct()
    {
        self::addController();
    }

    #Método de adição de controller
    private function addController()
    {
        $RotaController=$this->getRota();
        $NameS="App\\controller\\{$RotaController}";#namespace
        $this->Obj=new $NameS;

        if(isset($this->parseUrl()[1])){
            self::addMethod();
        }
    }

    #Método de adição de método do controller
    private function addMethod()
    {       # method_ função php requer dois parametros, 1 objeto 2 nome do metodo
        if(method_exists($this->Obj, $this->parseUrl()[1])){
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj,$this->getMethod()],$this->getParam());
        }
    }

    #Método de adição de parâmetros do controller
    private function addParam()
    {
        $ContArray=count($this->parseUrl());
        if($ContArray > 2){
            foreach($this->parseUrl() as $Key => $Value){
                if($Key > 1){
                    $this->setParam($this->Param += [$Key => $Value]);
                }
            }
        }
    }




}