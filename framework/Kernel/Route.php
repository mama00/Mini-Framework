<?php
namespace Framework\Kernel;
use Framework\Kernel\AppController;

class Route{
   
    public function match($url)
    {
        $route= require_once __DIR__.'/../../app/Route/Route.php';
        
        if(!empty($route[$url]))
        {
            $vv=explode('@',$route[$url]);
            require_once __DIR__.'/../../app/Controller/'.$vv[0].'.php';
            $vv[0]='App\Controller\\'.$vv[0];
            $app=new $vv[0]();
            $function=$vv[1];
            $app->$function();
        }
    }


}