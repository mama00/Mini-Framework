<?php

namespace Framework\Kernel;

use Framework\Kernel\Interfaces\RequestInterface;

class Request implements RequestInterface
{
    public function __construct()
    {
        if(!empty($_GET))
        $this->__type__='GET';
        if(!empty($_POST))
        $this->__type__='POST';
        foreach($_REQUEST as $key=>$request )
        {
            $this->$key=$request;
        }
    }
}