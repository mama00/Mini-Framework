<?php
namespace Framework\Kernel\Event;
use Framework\Kernel\Interfaces\Observer;

abstract class BaseListener implements Observer
{
    protected $event;

    abstract public function update();

    public function setObservable($event)
    {
        $this->event=$event;
    }
    
}