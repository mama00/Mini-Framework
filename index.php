<?php 
require_once __DIR__.'/vendor/autoload.php';
use Framework\Kernel\AppController;

////Get the URL and paste it to the application controller
$action=$_GET['action'];
$app=new AppController();
$app->run($action);

