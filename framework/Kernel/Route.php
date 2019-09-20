<?php
namespace Framework\Kernel;
use Framework\Kernel\AppController;
use Framework\Kernel\Utilities\Functions\View;

class Route{
   
    public function match($url)
    {
        //TO-DO: function must be rewrite. only support 'url@parameter' for now
        $decompositionUrl=explode('@',$url);
        
        $route= require_once __DIR__.'/../../app/Route/Route.php';
        
        if(!empty($route[$decompositionUrl[0]]))
        {
            $vv=explode('@',$route[$decompositionUrl[0]]);
            require_once __DIR__.'/../../app/Controller/'.$vv[0].'.php';
            $vv[0]='App\Controller\\'.$vv[0];
            $app=new $vv[0]();
            $function=$vv[1];
            if(!empty($decompositionUrl[1]))
            $app->$function($decompositionUrl[1]);
            else
            $app->$function();
        }
        else
        View::View('404.html');
    }


}