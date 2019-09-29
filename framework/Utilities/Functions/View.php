<?php
namespace Framework\Kernel\Utilities\Functions;
class View
{
    public static function  View(String $url,$var_prefix=NULL)
    {
      
      $urlFinal='app/View/'.$url;
      if(!empty($var_prefix))
        extract($var_prefix);
      require_once  __DIR__.'/../../../'.$urlFinal;
      die;
    }
   
}

