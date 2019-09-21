<?php

namespace Framework\Kernel;

use Framework\Kernel\Interfaces\RequestInterface;

abstract class BaseMiddleWare
{

    private $nextMiddleware;
    private $last;
    abstract public function handle(RequestInterface &$request);
    public function Next(RequestInterface $request)
    {
        if($this->last!=true)
        $this->nextMiddleware->handle($request);
    }
    public function setNextMiddleware(BaseMiddleWare $middleware)
    {
        $this->nextMiddleware=$middleware;
    }
    public function setLast()
    {
        $this->last=true;
    }
    
}