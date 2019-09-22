<?php 
require_once __DIR__.'/vendor/autoload.php';
use Framework\Kernel\AppController;
use Framework\Kernel\Route;

$url=Route::getUrl();////Get the URL and paste it to the application controller
$app=new AppController();
$app->run($url);

