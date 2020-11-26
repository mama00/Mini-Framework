<?php

namespace App\Controller;

use Framework\Kernel\AppController;
use Framework\Kernel\Utilities\Functions\View;

class Test extends AppController
{
  public function tt()
  {
    return View::View('templateresellers/index.php');
  }
}