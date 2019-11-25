<?php
//traits são pedaços de classes, ou classes auxiliadoras
namespace Src\traits;

trait TraitUrlParser{

    #Divide a url em um array
    public function parseUrl()
    {          #Explode para transformar em array, seprando por /, rtrim para retirar os espaços vazios, filter_ sanitize_url fucao do php para retirar caractres ilegais        
        return explode("/",rtrim($_GET['url']),FILTER_SANITIZE_URL);
    }
}