<?php
namespace Framework\Kernel;
//this class act like a factory pattern and instanciate all stuff
//in order to notify all listener
class EventManager 
{
    public static function Event($eventStarted)
    {
        $className=explode('\\',get_class($eventStarted));
        $className=$className[count($className)-1];
        $listInstanciedListener=[];
        $i=0;
        require __DIR__.'/../../serviceProvider/EventServiceProdiver.php';
        $listListener=$event[$className];
        if(!empty($listListener))
        {
                foreach($listListener as $listener)
            {
                $listInstanciedListener[$i]=new $listener;
                $eventStarted->register($listInstanciedListener[$i]);
                $listInstanciedListener[$i]->setObservable($eventStarted);
                $i++;
            }
        }
        
        $eventStarted->notify();
    }
}