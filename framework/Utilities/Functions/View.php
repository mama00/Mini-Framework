<?php
namespace Framework\Kernel\Utilities\Functions;
class View
{
    public static function  View(String $url,$contenu=NULL)
    {
      
        $urlFinal='app/View/'.$url;
        require_once  $_SERVER['DOCUMENT_ROOT'].'/framework//'.$urlFinal;
    }
   
}
