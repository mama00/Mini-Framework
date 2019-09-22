<?php 
namespace Framework\Kernel\Event;
use Framework\Kernel\Interfaces\Observable;
class BaseEvent implements Observable
{
    protected $listener=[];
    public function register( $listener)
    {
        array_push($this->listener,$listener); 
    }
    public function remove($listener)
    {
        if(($key=array_search($listener,$this->listener))!=false)
            unset($this->listener[$key]);
    }
    public function notify()
    {
        foreach($this->listener as $listener)
        {
            $listener->update();
        }
    }
} 