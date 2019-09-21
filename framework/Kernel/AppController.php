<?php 
namespace Framework\Kernel;

use Framework\Kernel\Interfaces\RequestInterface;

require_once __DIR__.'/../../vendor/autoload.php';


class AppController
{
    protected  $request;
    public function run($url)
    {
        $route=new Route();
        $route->match($url);
    }

    public function setRequest(RequestInterface $Request )
    {
        $this->request=$Request;
    }
   
}