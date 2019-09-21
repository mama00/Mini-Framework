<?php
namespace App\MiddleWare;

use Framework\Kernel\BaseMiddleWare;
use Framework\Kernel\Interfaces\RequestInterface;

class testMiddleware extends BaseMiddleWare
{
    public function handle(RequestInterface &$request)
    {
        $request->input='je suis passe par le middleware test';
        $this->Next($request);
    }
}