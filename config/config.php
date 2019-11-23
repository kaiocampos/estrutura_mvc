<?php
#Arquivos diretórios raízes
$PastaInterna="mvc_estrutura/";
#Caminho de url
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')
{   #DIREQ = Diretório de REQUISIÇOES fisicas 
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}"); 
} else
{ 
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}"); 
}

#Diretórios Específicos
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRJS',DIRPAGE."public/js/");

#Acesso ao banco de dados
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");