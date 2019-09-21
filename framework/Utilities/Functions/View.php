<?php
namespace Framework\Kernel\Utilities\Functions;
class View
{
    public static function  View(String $url,$contenu=NULL)
    {
      
        $urlFinal='app/View/'.$url;
        require_once  __DIR__.'/../../../'.$urlFinal;
      
    }
   
}

