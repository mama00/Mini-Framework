<?php
namespace Framework\Kernel\Utilities\Functions;
use Framework\Kernel\Utilities\Functions\Functions;
class View
{
    public static function  View(String $url,$var_prefix=NULL)
    {
      //ugly must change
      $assets=function($d){
        $config=require __DIR__.'/../../../config.php';
        echo($config['STATIC_FILES'].$d);
      };

      $urlFinal='app/View/'.$url;
      if(!empty($var_prefix))
        extract($var_prefix);
      require_once (__DIR__.'/../../../'.$urlFinal);
      die;
    }
   
}

