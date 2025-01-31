<?php
namespace Framework\Kernel;
use Framework\Kernel\Utilities\Functions\View;
use Framework\Kernel\Request;

class Route{
   
    public function match($url)
    {
        //TODO: function must be rewrite. only support 'url@parameter' for now
        $decompositionUrl=explode('@',$url);
        
         require __DIR__.'/../../app/Route/Route.php'; //Middleware and route of the App
        
        if(!empty($listRoute[$decompositionUrl[0]]))
        {
           
            $vv=explode('@',$listRoute[$decompositionUrl[0]]);
            require_once __DIR__.'/../../app/Controller/'.$vv[0].'.php';
            $vv[0]='App\Controller\\'.$vv[0];
            $app=new $vv[0]();
            $function=$vv[1];

            $MiddlewareRequest=new Request;
            new MiddlewareManager($decompositionUrl[0],$MiddlewareRequest);
            $app->setRequest($MiddlewareRequest);
            
            if(!empty($decompositionUrl[1]))
            $app->$function($decompositionUrl[1]);
            else
            $app->$function();
        }
        else
        View::View('404.html');
    }

    public static function getUrl()
    {
        $action=$_GET['action']?? 'index'; //if url is index then server wont set action variable
        $actionArray=explode('\\',__DIR__);//this will give us the name
         $folderName=$actionArray[count($actionArray)-3];//of the folder containing the web site
        $path=explode($folderName.'/',$action);//getting the real url
        
        if(!empty($path[1]))
        return $path[1];
        else
        return 'index';
    }


}