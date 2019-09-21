<?php
namespace App\MiddleWare;

use Framework\Kernel\BaseMiddleWare;
use Framework\Kernel\Interfaces\RequestInterface;

class test2Middleware extends BaseMiddleWare
{
    public function handle(RequestInterface &$request)
    {
        $request->input2='je suis passe par le middleware test2';
        $this->Next($request);
    }
}