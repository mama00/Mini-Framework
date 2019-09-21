<?php 

namespace Framework\Kernel;
class MiddlewareManager
{
    public function __construct(String $url,&$request)
    {
        $i=0;
        $instanciedMiddleware=[];

        require __DIR__.'/../../app/Route/Route.php';
        if(!empty($listMiddleware[$url]))
        {
            $arrayMiddleware=$listMiddleware[$url];
      
            foreach($arrayMiddleware as $middleware)
            {
                $instanciedMiddleware[$i]=new $middleware;
                $i++;
            }
            for($j=0;$j<$i;$j++)
            {
                if($j==$i-1)
                    $instanciedMiddleware[$j]->setLast();
                else
                    $instanciedMiddleware[$j]->setNextMiddleware($instanciedMiddleware[$j+1]);
            }
            
                $instanciedMiddleware[0]->handle($request);
        }
      
      
    }
}