<?php 
namespace Framework\Kernel;

function assets($url)
{
    require_once __DIR__.'./../../config.php';
    return $STATIC_FILES.$url;

}







?>