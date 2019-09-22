<?php

namespace App\Event\Listener;
use Framework\Kernel\Event\BaseListener;

class ListenerTest2 extends BaseListener
{
    public function update()
    {
        var_dump('lister');
    }
}