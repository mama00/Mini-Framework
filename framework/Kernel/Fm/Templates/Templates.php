<?php
$middleware="<?php
namespace App\MiddleWare;
use Framework\Kernel\BaseMiddleWare;
use Framework\Kernel\Interfaces\RequestInterface;

    class $filename extends BaseMiddleWare
    {
        public function handle(RequestInterface &\$request)
        {
        //TODO write your code here 
    
            \$this->Next(\$request);
        }
    }";

$model="<?php
namespace App\Model;
use Framework\Kernel\BaseModel;

class $filename extends BaseModel
{
    protected \$primaryKey='id';    // name of your primary key
    protected \$table='$filename'; // name of your table
    //TODO your code
}";

$controller="<?php

namespace App\Controller;

use Framework\Kernel\AppController;

class $filename extends AppController
{
  //TODO your code
}";

$listener="<?php

namespace App\Event\Listener;

use Framework\Kernel\Event\BaseListener;

class $filename extends BaseListener
{
    public function update()
    {
        //TODO your code
    }
}";

$event="<?php

namespace App\Event\Event;

use Framework\Kernel\Event\BaseEvent;

class $filename extends BaseEvent
{
    //TODO your code
}";
