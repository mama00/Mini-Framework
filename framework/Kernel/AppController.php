<?php 
namespace Framework\Kernel;

require_once __DIR__.'/../../vendor/autoload.php';


class AppController
{

    public function run($url)
    {
        $route=new Route();
        $route->match($url);
    }
   
}