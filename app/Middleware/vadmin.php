<?php
namespace App\MiddleWare;
use Framework\Kernel\BaseMiddleWare;
use Framework\Kernel\Interfaces\RequestInterface;

    class vadmin extends BaseMiddleWare
    {
        public function handle(RequestInterface &$request)
        {
        //TODO write your code here 
    
            $this->Next($request);
        }
    }