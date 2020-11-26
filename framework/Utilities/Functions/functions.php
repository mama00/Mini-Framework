<?php

namespace Framework\Kernel\Utilities\Functions;

    function dd( $var)
        {
            var_dump($var);
            die;
        }
         function assets($url)
        {
            //require_once __DIR__.'./../../config.php';
            return 'app/View/'.$url;
        
        }


