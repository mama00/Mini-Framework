<?php

namespace App\Event\Listener;

use Framework\Kernel\Event\BaseListener;

class ListenerTest extends BaseListener
{
    public function update()
    {
        var_dump('wap bien pase');
    }
}